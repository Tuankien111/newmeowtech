
document.addEventListener("DOMContentLoaded", () => {
    const blog_detail = document.querySelector(".blog_detail");
    const detail_title = document.querySelector(".detail_title");
    POST_ID = detail_title.getAttribute('data-id');
    renderBlogUI(fetchBlogDetail,blog_detail,detail_title);

    const blog_recent = document.querySelector(".blog_recent");
    renderRecentBlog(fetchBlog,blog_recent,1);

    const category_list = document.querySelector(".category-list");
    renderCategory(fetchBlogDetail,category_list);

    $(".category-list").on('click', '.blog_category', function (event) {
        let label = $(this).text();

    });

    const relatedPosts = document.querySelector(".related-posts");
    relatedPost(fetchBlog,relatedPosts);

});




async function fetchBlogDetail() {
    const response = await fetch(
        "https://www.googleapis.com/blogger/v3/blogs/"+BLOG_ID+"/posts/"+POST_ID+"?key="+API_BLOGGER_KEY);

    const data = await response.json();
    return data;
}

async function fetchBlog() {
    const response = await fetch(
        "https://www.googleapis.com/blogger/v3/blogs/"+BLOG_ID+"/posts?key="+API_BLOGGER_KEY);

    const data = await response.json();
    return data.items;
}

async function renderBlogUI(callback, element, element_title) {
    const blogDetail = await callback();
    element_title.innerHTML = blogDetail.title;
    let thumb = "";
    thumb = getThumbnail(blogDetail);
    let blogdetailUI  = `
        <div class="single-blog-content blog-grid">

            <div class="author">
                <div class="author-thumb">
                    <img style="border-radius:100%" src="${blogDetail.author.image.url}" width="100" height="100" alt="Blog Author">
                </div>
                <div class="info">
                    <h6 class="author-name">${blogDetail.author.displayName}</h6>
                    <ul class="blog-meta list-unstyled">
                        <li>${formattedDate(blogDetail)}</li>
                    </ul>
                </div>
            </div>
            <div class="post_content"> ${blogDetail.content}</div>
        </div>
        <div class="blog-author">
            <div class="author">
                <div class="author-thumb">
                    <img style="border-radius:100%" src="${blogDetail.author.image.url}" width="100" height="100" alt="Blog Author">
                </div>
                <div class="info">
                    <h5 class="title"><a href="#">${blogDetail.author.displayName}</a></h5>
                    <p>Email is a crucial channel in any marketing mix,
                        and never has this been truer than for today’s entrepreneur. Curious
                        what to say.</p>
                    <ul class="social-share list-unstyled">
                        <li><a href="https://www.facebook.com/meowtechglobal/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.tiktok.com/@meowtechglobal"><i class="fab fa-tiktok"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/meowtech/"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://www.instagram.com/meowtechglobal/"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    `;
    element.innerHTML = blogdetailUI;

}

async function relatedPost(callback,element) {
    const blogArray = await callback();
    let randomIndex1 = Math.floor(Math.random() * blogArray.length);
    let randomIndex2 = Math.floor(Math.random() * blogArray.length);
    let randomIndex3 = Math.floor(Math.random() * blogArray.length);

    let blogRender = "";
    let thumb = "";

    blogArray.forEach((blog,index)=>{
        thumb = getThumbnail(blog);
        if (index == randomIndex1 || index == randomIndex2 || index == randomIndex3) {
            blogRender += `
            <div class="blog-list">
                <div class="post-thumbnail">
                    <a href="${_DIR}/${blog.id}"><img width="330px" height="264px" src="${thumb}" alt="Blog Post"></a>
                </div>
                <div class="post-content">
                    <h5 class="title"><a href="${_DIR}/${blog.id}">${blog.title}</a></h5>
                    <a href="${_DIR}/${blog.id}" class="more-btn">Learn more<i class="far fa-angle-right"></i></a>
                </div>
            </div>
            `;
        }
    });

    element.innerHTML = blogRender;
}

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
                    <a href="${_DIR}/${blog.id}"><img src="${thumb}" width="100px" height="80px" alt="Blog"></a>
                </div>
                <div class="post-content">
                    <h6 class="title"><a href="${_DIR}/${blog.id}">${blog.title}</a></h6>
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
//======= get label
async function getLabel(callback) {
    const blogArray = await callback();
    // console.log(blogArray.labels);
    const listLabels = [];
    const seenLabels = {};

        if (blogArray.labels) {
            blogArray.labels.forEach(label => {
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
    return listLabels;
}
//======= renderCategory
async function renderCategory(callback,element) {
    const labels = await getLabel(callback);
    let blogRender = "";
    labels.forEach((label,index)=>{
        blogRender += `<li class="blog_category"><a href="#">${label}</a></li>`
    });
    element.innerHTML = blogRender;
}

function getSubname(title) {

    let subContent = "";
    if (title.length >= 40) {
        subContent = title.substring(0, 40);
        var lastSpaceIndex = subContent.lastIndexOf(" ");
        subContent = subContent.substring(0, lastSpaceIndex) + "...";
    }
    else
        subContent = title;
    return subContent;
}
//====================================
const API_BLOGGER_KEY = "AIzaSyCqvyrLgn6NA2Id2VObCzBaZzWn8pzTHj4";
const BLOG_ID = "4008563570693275057"
let POST_ID ="";
const _DIR = "http://127.0.0.1:8000/blog/detail";
// const _DIR = "";
