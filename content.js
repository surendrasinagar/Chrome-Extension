fetch('http://localhost/db1/script.php', { method: 'POST', body: 'name=<get form name>&email=<get form email>' }).then(data => {
document.getElementById('output') = data; // sets data to that
})