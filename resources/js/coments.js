$(document).ready(function() {
    $(".button-insert").click(function() {
       let comment = $(".input-comment").val(); 
       if (comment != "") { 
          let autor = "Евгений Козич"; 
          let date = getCurrentDate(); 
          let newComment = '<div class="block-comments">' +
                            '<div class="title-comments">' +
                               '<a href="#" class="autor-comment">' + autor + '</a>' +
                               '<span class="comment-date">' + date + '</span>' +
                            '</div>' +
                            '<div class="comments-content">' + comment + '</div>' +
                         '</div>';
          $(".comments-container").append(newComment);
          let commentsCount = parseInt($(".coments-count").text().trim());
          $(".coments-count").text(" " + (commentsCount + 1));
          $(".input-comment").val("");
       }
    });
  });
  
  function getCurrentDate() {
    let now = new Date();
    let day = now.getDate();
    let month = now.getMonth() + 1;
    let year = now.getFullYear();
    return (day < 10 ? "0" + day : day) + "." + (month < 10 ? "0" + month : month) + "." + year;
  }
  