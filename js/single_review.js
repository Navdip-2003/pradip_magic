$(document).ready(function(){
    rating_value = 0;

function loadData(){
    
    $.ajax({
        url:'uregi.php',
        method:"POST",
        data:{action:'load_data'},
       
        success:function(data){
            var parsedData = JSON.parse(data);

             
            console.log(parsedData)
            $('#avg_rating').text(parsedData.avgUserRatings)
            $('#total_review').text(parsedData.totalReviews)
            $('#total_five_star_review').text(parsedData.totalRatings5)
            $('#total_four_star_review').text(parsedData.totalRatings4)
            $('#total_three_star_review').text(parsedData.totalRatings3)
            $('#total_two_star_review').text(parsedData.totalRatings2)
            $('#total_one_star_review').text(parsedData.totalRatings1)

        
            $('#five_star_progress').css('width',(parsedData.totalRatings5 / parsedData.totalReviews)*100)
            $('#four_star_progress').css('width',(parsedData.totalRatings4 / parsedData.totalReviews)*100)
            $('#three_star_progress').css('width',(parsedData.totalRatings3 / parsedData.totalReviews)*100)
            $('#two_star_progress').css('width',(parsedData.totalRatings2 / parsedData.totalReviews)*100)
            $('#one_star_progress').css('width',(parsedData.totalRatings1 / parsedData.totalReviews)*100)


            var countStar = 0;
            $('.main_star').each(function(){
             
                    countStar++
                    console.log(Math.ceil(parsedData.avgUserRatings))
                    if(Math.ceil(parsedData.avgUserRatings) >= countStar){
                        $(this).addClass('text-warning')
                        $(this).removeClass('star-light')
                    }
            })
            

            if(parsedData.ratingsList.length > 0){
                var html = '';
                for(var count=0;count<parsedData.ratingsList.length;count++){
console.log(count)
                    
html +=  ` <div class="">`;
html +=  `<div class="card mb-4  mt-4">`;
html +=  `<div class="card-body">`;
  html +=  `<div class="row">`;
	html +=  `<div class="col-sm-3">`;
	  html +=  `<p class="mb-0 color-x1">Full Name</p>`;
	html +=  `</div>`;
	html +=  `<div class="col-sm-9">`;
	  html +=  `<p class="text-muted mb-0">${parsedData.ratingsList[count].name}</p>`;
	html +=  `</div>`;
  html +=  `</div>`;
  html +=  `<hr>`;
	html +=  `<div class="row">`;
	html +=  `<div class="col-sm-3 d-flex">`;
	  html +=  `<p class="mb-0 color-x1 my-auto">Rates</p>`;
	html +=  `</div>`;
	html +=  `<div class="col-sm-9 d-flex">`;
	  html +=  `<div class="text-muted mb-0 text-x my-auto"> `;
	  for(var star = 0; star<5; star++){
						if(parsedData.ratingsList[count].rating >= star){
							className = 'text-warning'
						}else{
							className = 'star-light'
						}
						html += `<i class="fa fa-star mr-1 ${className}" ></i>`;
										}
		html +=  `</div>`;
		html +=  `<button class="btn btn-sm btn-bg-x1 ms-auto ">DELETE</button>`;
	html +=  `</div>`;
  html +=  `</div>`;
  html +=  `</div>`;
html +=  `</div>`;
html +=  `</div>`;
html +=  `<div class="card ">`;
html +=  `<div class="rew-x">`;
  html +=  `<div class="py-1 border-bottom mx-3"> <h5 class="my-2 color-x1">Description</h5></div>`;
  html +=  `<div class="p-3">`;
	html +=  `<p class=" mb-3"><span><i class="fa-solid fa-arrow-right color-x1 me-2"></i></span>`;
	 html +=  `${parsedData.ratingsList[count].message}`;
	html +=  `</p>`;
  html +=  `</div>`;
html +=  `</div>`;
html +=  `</div>`;

                }

            }

            $('#display_review').html(html)
            
        } // success
    })
}

loadData()


})