const spanRating = document.getElementById('rating-html')
const ratingInput = document.getElementById('rating');
let rating;


ratingInput.addEventListener('input', (e) => {
        spanRating.innerText = e.target.value
})

if(!rating){
    spanRating.innerText = 0
}


