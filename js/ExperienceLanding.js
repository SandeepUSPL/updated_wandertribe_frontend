function search() {
    var loc = document.getElementById('pac-input').value;
    localStorage.setItem('location', loc);
    localStorage.setItem('category', '');
    localStorage.setItem('startDate', '');
    top.location.href = 'CategoryExperience.php';
}

$('.experiences>div').click(function() {
    var loc = document.getElementById('pac-input').value;
    localStorage.setItem('location', loc);
    var category = $(this).find('h2').text();
    localStorage.setItem('category', category);
    localStorage.setItem('startDate', '');
    top.location.href = 'CategoryExperience.php';
});