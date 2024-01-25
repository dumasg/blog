const spanRating = document.getElementById('rating-html')
const ratingInput = document.getElementById('rating');
const imgDeleteArticle = document.getElementsByClassName('img-delete-article');
const contentCardArticle = document.getElementsByClassName('content-card-article');


for (let i = 0; i < imgDeleteArticle.length; i++) {
    let idArticle = contentCardArticle[i].attributes[1].value
    imgDeleteArticle[i].addEventListener('click', (e) => {
        const response = confirm(`Voulez vous supprimer l'article n°${idArticle}`)
        console.log(response)
        if(response){
            window.location.href=`/?action=blogPostDelete&id=${idArticle}`
        }
    })
}


// if (location.search.split("=")[1]){
//     ratingInput.addEventListener('input', (e) => {
//         spanRating.innerText = e.target.value
//     })
//
//     if((!rating) && (!location.search.split("=")[1].split("&")[0] == "blogPostModify")){
//         spanRating.innerText = 0
//     }
// }



