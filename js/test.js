function test(){

    fetch("https://cors-anywhere.herokuapp.com/http://newsapi.org/v2/top-headlines?=us&apikey=8e566599e1ca42a89d5a87a9c99dcc2e",{headers: new Headers({"X-Requested-With":"rwrwrqr"})})
        .then(a=>a.json())
        .then(response=>{
            for(var i=0; i<response.articles.length;i++){
                document.getElementById("output").innerHTML+= 
                    "<div style'=padding-top:20px;'> <img style='float: left; width: 150px;' src='"+
                    response.articles[i].urlToImage+"'><h1>"+response.articles[i].title+"</h1>"+response.articles[i].source.name
                    +"<br>"+response.articles[i].description+" <a href='"+response.articles[i].url+
                    "'target='_blank'>"+response.articles[i].url+"</a></div>";
            }
        })
}