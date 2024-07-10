document.addEventListener("DOMContentLoaded", () => {
    const blog_wrapper = document.querySelector(".blog_wrapper");
    const blog_recent = document.querySelector(".blog_recent");
    const category_list = document.querySelector(".category-list");
    const pagination = document.getElementById("pagination");
    renderBlogUI(fetchBlog,blog_wrapper,"");
    renderRecentBlog(fetchBlog,blog_recent,1);
    renderCategory(fetchBlog,category_list);
    // renderPagination(fetchBlog,pagination);

    // Ajax
    $(".category-list").on('click', '.blog_category', function (event) {
        let label = $(this).text();
        renderBlogUI(fetchBlog,blog_wrapper,label);
    });
});




//==== Fetch API
async function fetchBlog() {
    const response = await fetch(
        "https://www.googleapis.com/blogger/v3/blogs/"+BLOG_ID+"/posts?key="+API_BLOGGER_KEY);
    
    const data = await response.json();
    return data.items;
}

//==== Render page-numbers
async function renderPagination(callback,element) {
    const blogArray = await callback();
    const size = blogArray.length;
    const totalPages = Math.ceil(size / 3);
    let blogRender = "";
    for (let index = 0; index < totalPages; index++) {
        blogRender += `<li><a class="page-numbers" href="#">${index+1}</a></li>`; 
    }

    const pageRender = 
    `<li><a class="prev page-numbers" href="#"><i class="fa fa-arrow-left"></i></a></li>
         ${blogRender}       
    <li><a class="next page-numbers" href="#"><i class="fa fa-arrow-right"></i></a></li>
    `
    element.innerHTML = pageRender;
}

let currentPosts = [];
let currentIndex = 0;
const postsPerPage = 3;

async function renderBlogUI(callback, element, label) {
    const blogArray = await callback();
    let blogRender = "";
    let thumb = "";

    // Get posts for current page
    currentPosts = currentPosts.concat(blogArray.slice(currentIndex, currentIndex + postsPerPage));
    currentIndex += postsPerPage;

    // Generate HTML for each post
    currentPosts.forEach((blog,index)=>{
        let a = blog.labels;
        if(a == null) {
            a = "Other";
        }
        if(label == "" || (a != null && a.includes(label))) {
            thumb = getThumbnail(blog);
            blogRender += `
                <div class="blog-grid">
                    <h3 class="blog-title"><a href="./blog/detail/${blog.id}">${blog.title}</a></h3>
                    <div class="author">
                        <div class="author-thumb">
                            <img style="border-radius:100%" src="${blog.author.image.url}" width="100" height="100" alt="Blog Author">
                        </div>
                        <div class="info">
                            <h6 class="author-name">${blog.author.displayName}</h6>
                            <ul class="blog-meta list-unstyled">
                                <li><i class="fa-solid fa-calendar-days"></i> ${formattedDate(blog)}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="post-thumbnail">
                        <a href="./blog/detail/${blog.id}"><img src="${thumb}" width="810px" height="440px" alt="Blog"></a>
                    </div>
                    <p>${getContentText(blog)}</p>
                </div>
                <hr>
            `
        }
    });
                    // <a href="./blog/detail/${blog.id}" class="axil-btn btn-borderd btn-large">Read More</a>

    // Add HTML to the DOM
    element.innerHTML = blogRender;

    // Check if there are more posts to load
    if(currentIndex < blogArray.length) {
        // Generate Load More button
        const btn = document.createElement('a');
        btn.innerText = 'Load More';
        btn.classList.add('axil-btn','btn-borderd','btn-large');
        btn.addEventListener('click', () => {
            renderBlogUI(callback, element, label);
        });
        element.appendChild(btn);
    }
}

//==== Render recent-blog
async function renderRecentBlog(callback, element, page) {
    const blogArray = await callback();
    const postsPerPage = 3;
    const startIndex = (page - 1) * postsPerPage;
    const endIndex = startIndex + postsPerPage;

    let blogRender = "";
    let thumb = "";
    
    // Sắp xếp mảng blogArray theo ngày giảm dần
    blogArray.sort((a, b) => new Date(b.date) - new Date(a.date));
    
    // Lấy các bài viết trong trang hiện tại
    const currentPosts = blogArray.slice(startIndex, endIndex);

    currentPosts.forEach((blog,index)=>{
        thumb = getThumbnail(blog);
        blogRender += `
            <div class="single-post">
                <div class="post-thumbnail">
                    <a href="./blog/detail/${blog.id}"><img src="${thumb}" width="100px" height="80px" alt="Blog"></a>
                </div>
                <div class="post-content">
                    <h6 class="title"><a href="./blog/detail/${blog.id}">${blog.title}</a></h6>
                    <ul class="blog-meta list-unstyled">
                        <li>${formattedDate(blog)}</li>
                    </ul>
                </div>
            </div>
        `;
    });
    
    element.innerHTML = blogRender;
}

//======= get image
function getThumbnail(blog) {
    const contentString = blog.content;
    const element = document.createElement('div');
    element.innerHTML=contentString;
    const thumb = element.querySelector('img');
    if(thumb != null)
       return thumb.src;    
}

//======= get label
async function getLabel(callback) {
    const blogArray = await callback();
    const listLabels = [];
    const seenLabels = {}; 

    blogArray.forEach(post => {
        if (post.labels) {
            post.labels.forEach(label => {
                if (!seenLabels[label]) { 
                    listLabels.push(label);
                    seenLabels[label] = true; 
                }
            });
        } 
        
        // Check if "Other" already exists in the listLabels array
        else if (!seenLabels["Other"]) {
            listLabels.push("Other");
            seenLabels["Other"] = true; 
        }
    });
    return listLabels;
}

async function renderCategory(callback,element) {
    const labels = await getLabel(callback);
    let blogRender = "";
    labels.forEach((label,index)=>{
        blogRender += `<li class="blog_category"><a href="#">${label}</a></li>`
    });
    element.innerHTML = blogRender;
}

//======= get content - 300 words
function getContentText(blog) {
    let contentTextList = "";
    const contentHTML = blog.content;
    let temp = document.createElement("div");
    temp.innerHTML = contentHTML;
    let textContent = temp.textContent || temp.innerText || "";
    contentTextList += textContent.trim();
    
    let subContent = "";
    if (contentTextList.length >= 300) {
        subContent = contentTextList.substring(0, 300);
        var lastSpaceIndex = subContent.lastIndexOf(" ");
        subContent = subContent.substring(0, lastSpaceIndex) + "...";
    }
    else
        subContent = contentTextList;
    return subContent; 
}
//======== format date
function formattedDate(blog) {
    let date = new Date(blog.published);

    let monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
                    "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];


    let day = date.getDate();
    let monthIndex = date.getMonth();
    let year = date.getFullYear();


    let formattedDateString = monthNames[monthIndex] + " " + day + ", " + year;

    return formattedDateString; 
}

//====================================
const API_BLOGGER_KEY = "AIzaSyCqvyrLgn6NA2Id2VObCzBaZzWn8pzTHj4";
const BLOG_ID = "4008563570693275057"