// -------------------------------------
// Mobile menu
// -------------------------------------
var mobileToggle = document.getElementById('mobile-toggle')

mobileToggle.addEventListener("click", function() {
    document.body.classList.toggle('open')
})

document.querySelectorAll('header .nav-links a').forEach(function(a) {
    a.addEventListener("click", function() {
        document.body.classList.remove('open')
    })
})
