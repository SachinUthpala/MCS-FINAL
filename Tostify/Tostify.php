<?php




if (!empty($_SESSION['CRF_TOKEN_ERROR']) && $_SESSION['CRF_TOKEN_ERROR'] == 1) {
    echo '
    <script>
    Toastify({
      text: "CRF TOKEN ERROR !",
      duration: 3000,
      newWindow: true,
      close: true,
      gravity: "top", // top or bottom
      position: "right", // left, center or right
      stopOnFocus: true, // Prevent dismissing on hover
      style: {
        background: "linear-gradient(to right, #f30014ff, #ff002bff)",
      },
      onClick: function(){} 
    }).showToast();
    </script>
    ';
    
    unset($_SESSION['CRF_TOKEN_ERROR']); // clear after showing toast
}else if (!empty($_SESSION['REG_SUCCESS']) && $_SESSION['REG_SUCCESS'] == 1) {
    echo '
    <script>
    Toastify({
      text: "Registration Complete & Verification Code Sent !",
      duration: 3000,
      newWindow: true,
      close: true,
      gravity: "top", // top or bottom
      position: "right", // left, center or right
      stopOnFocus: true, // Prevent dismissing on hover
      style: {
        background: "linear-gradient(to right, #0032d4ff, #1466ffff)",
      },
      onClick: function(){} 
    }).showToast();
    </script>
    ';
    
    unset($_SESSION['REG_SUCCESS']); // clear after showing toast
}else if (!empty($_SESSION['MAIL_EXSIST']) && $_SESSION['MAIL_EXSIST'] == 1) {
    echo '
    <script>
    Toastify({
      text: "User Mail Already Exsiste !",
      duration: 3000,
      newWindow: true,
      close: true,
      gravity: "top", // top or bottom
      position: "right", // left, center or right
      stopOnFocus: true, // Prevent dismissing on hover
      style: {
        background: "linear-gradient(to right, #f30014ff, #ff002bff)",
      },
      onClick: function(){} 
    }).showToast();
    </script>
    ';
    
    unset($_SESSION['MAIL_EXSIST']); // clear after showing toast
}















?>