$(document).ready(function () {

    $(".messages").animate({
      scrollTop: $('.messages').get(0).scrollHeight
    }, 0);

    $("#search").click(function (e) {
      //e.preventDefault();
      $("#search").css('background', 'none');
      $(".fa-paper-plane").addClass("hide");
      $(".dot-img").removeClass("hide");

      // setTimeout(function () {
      //   $("#search").css('background', '#25D366');
      //   $(".fa-paper-plane").removeClass("hide");
      //   $(".dot-img").addClass("hide");
      // }, 6000);

    });

    $(function () {

      $('#chatbot-icons').click(function(e) {
        $('#chatbot-box').toggleClass('dispaly-box');
      });

      $("#form1").submit(function (event) {
        event.preventDefault();
        $.ajax({
          url: 'http://localhost/chat_bot/config/api.php',
          type: 'POST',
          data: $(this).serialize(),
          beforeSend: function() {
            let currentDate = new Date().toLocaleDateString();

            let question = document.getElementById('question').value;
            var msgSend = '';
            msgSend += '<div class="message sent">';
            msgSend += '<div class="avatar"><img src="https://randomuser.me/api/portraits/women/24.jpg" alt="User Avatar"></div>';
            msgSend += '<div class="text">' + question + '</div>';
            msgSend += '<div class="time">' + currentDate + '</div>';
            msgSend += '</div>';
            $(".ajax-response").append(msgSend);

            // Delay time
            $("#search").css('background', 'none');
            $(".fa-paper-plane").addClass("hide");
            $(".dot-img").removeClass("hide");
          },
          success: function (result) {
            $(".message-input").val("");
            // display results
            $(".ajax-response").append(result);

            $(".messages").animate({
              scrollTop: $('.messages').get(0).scrollHeight
            }, 0);

            $("#search").css('background', '#25D366');
            $(".fa-paper-plane").removeClass("hide");
            $(".dot-img").addClass("hide");
          }
  
        });
      });


    });

  });