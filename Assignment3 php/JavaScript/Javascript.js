function moveNextPage() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username.trim() !== "" && password.trim() !== "") {
      
      window.location.href = "Page.php";
    } else {
      alert("Please complete both fields before continuing");
    }
  }