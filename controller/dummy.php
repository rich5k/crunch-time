<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <script type="text/javascript" src="../js/test.js"></script>
    <script>
    // function getnews() {
    //     fetch("https://cors-anywhere.herokuapp.com/http://newsapi.org/v2/top-headlines?=ghana&apikey=8e566599e1ca42a89d5a87a9c99dcc2e",{headers: new Headers({"X-Requested-With':rwrwrqr'"})})
    //     .then(a=>a.json())
    //     .then(response=>{
    //         for(var i=0; i<response.articles.length;i++){
    //             document.getElementById("output").innerHTML+= 
    //                 "<div style'=padding-top:20px;'> <img style='float: left; width: 150px;' src="+
    //                 response.articles[i]urlToImage+"><h1>"+response.articles[i].title+"</h1>"+response.articles[i].source.name
    //                 +"<br>"+response.articles[i].description+" <a href="+response.articles[i].url+
    //                 "target='_blank'>"+response.articles[i].url+"</a></div>";
    //         }
    //     })
    // }
</script>
</head>

<body >
<?php
    $url= 'http://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=8e566599e1ca42a89d5a87a9c99dcc2e';
    $response= file_get_contents($url);
    $newsData= json_decode($response);

    foreach($newsData->articles as $news){
        echo '<img src="'.$news->urlToImage.'" alt="">';
        echo '<h4>Description'.$news->description.'</h4>';
    }
?>

</body>
</html>
