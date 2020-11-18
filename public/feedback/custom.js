$(document).ready(function(){

	$('.feedbackbtn').click(function(){
              var id = $(this).data('id');
              var subject = $(this).data('subject');

              var feedback = {
                id:id,
                subject:subject
              }

              console.log(feedback);
              var feedbacklist = localStorage.getItem("feedbacks");
              console.log(feedbacklist);

              var FeedbackArray;

              if(feedbacklist == null){
                  FeedbackArray = [];
              }else{
                  FeedbackArray = JSON.parse(feedbacklist);
              }

              FeedbackArray.push(feedback);

              var feedbackstring = JSON.stringify(FeedbackArray);
              localStorage.setItem("feedbacks",feedbackstring);
         })
	
})