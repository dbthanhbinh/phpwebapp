<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chatbot</title>
  <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
   <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="container">
    <div class="header">
      <img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="Chatbot Logo">
      <h1> <span style="color: skyblue;padding-right: 1rem;"> Welcome to Chatbot! </span></h1>
    </div>

    <div class="content">
      <p>
        Debitis modi eius eos est aut aliquid accusamus quis dolor vitae, non similique qui saepe aliquam eos, repellat possimus ut quaerat vitae voluptatibus laudantium mollitia placeat dolores ex atque, illo blanditiis ad libero molestiae cum hic possimus eveniet assumenda laudantium? Rerum officiis quisquam, quia sed dignissimos reiciendis sunt rem, rerum reiciendis repellat assumenda animi voluptate impedit cum aliquid repellendus laudantium, nisi optio totam sunt non rerum labore quos facilis? Dolore nemo in perferendis, temporibus dolore suscipit odio deserunt aspernatur nulla eum harum ut corporis tenetur, ad molestias provident iste laborum, quos ullam quas libero unde eaque repellendus tempore ipsam commodi numquam ratione. Quaerat soluta quidem consequatur delectus totam dolorum nobis assumenda corrupti architecto quos, mollitia odio beatae consequatur quibusdam possimus voluptatum vel aliquid obcaecati, quae cupiditate autem.
      </p>
    </div>

    <?php
    include('../configs/config.php');
    if (ENABLE_CHATBOT) {
      $newdate = date('Y-m-d');
      ?>
      <div class="chatbot-icons" id="chatbot-icons">
        <img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="Chatbot Logo">
      </div>

      <div class="chatbot-box" id="chatbot-box">
        <div class="header">
          <img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="Chatbot Logo">
          <h3> <span style="color: skyblue;padding-right: 1rem;"> How can i help you! </span></h3>
        </div>
        <div class="chat-box">
          <div class="messages">
            <div class="message sent">
              <div class="avatar"><img src="https://randomuser.me/api/portraits/women/24.jpg" alt="User Avatar"></div>
              <div class="text">How can i help you!</div>
              <div class="time"><?= $newdate ?></div>
            </div>
            <div class="ajax-response">
            </div>
          </div>
          <form action="" method="post" id="form1">
            <div class="input-box">
              <input type="text" class="message-input" name="question" id="question" placeholder="Type your message..." required>
              <button type="submit" class="send-button" name="search" id="search"><i class="fa fa-paper-plane"></i><img src="./img/dots-loading.gif" class="dot-img hide"> </button>
            </div>
          </form>
        </div>  
      <div>
    <?php
    }
    ?>


  </div>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="./js/app.js"></script>
</body>

</html>