const search = () => {
    //    alert('hello');
    const searchbox = document.getElementById("search-item").value.toUpperCase();
    const bloglist =  document.getElementById("blog-list") 
    const post =  document.querySelectorAll(".blog-grid")   
    const pname = bloglist.getElementsByTagName("h3")
    
    for (var i=0; i < pname.length; i++) {
    
        let match = post[i].getElementsByTagName('h3')[0];
    
        if (match) { 
        
            let textvalue = match.textContent || match.innerHTML
        
            if (textvalue.toUpperCase().indexOf(searchbox) > -1){
            
            post[i].style.display="";
            
            } else {
            
            post[i].style.display = "none"; 
            }
            
        }
    
    }
    
 
}
