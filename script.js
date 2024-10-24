document.getElementById("forgotPasswordLink").addEventListener("click", function(e) {
    e.preventDefault();
    
    document.getElementById("loginBox").style.display = "none";
    
    document.getElementById("resetBox").style.display = "block";
});

document.getElementById("backToLogin").addEventListener("click", function() {
    document.getElementById("resetBox").style.display = "none";
    
    document.getElementById("loginBox").style.display = "block";
});

document.querySelectorAll(".close-button").forEach(function(button) {
    button.addEventListener("click", function() {
        document.getElementById("loginBox").style.display = "none";
        document.getElementById("resetBox").style.display = "none";
        alert("Fechando a tela...");
    });
});
