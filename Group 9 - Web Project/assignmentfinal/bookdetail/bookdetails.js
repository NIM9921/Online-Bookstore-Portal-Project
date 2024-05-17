document.addEventListener('DOMContentLoaded', function() {

    loadLanguagesAndCategories();
    // Add event listener for the 'Submit' button

    document.getElementById('btnsubmitt').addEventListener('click', function(event) {
        event.preventDefault();

        var form = document.getElementById('detailform');
        var formData = new FormData(form);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', './bookdetail.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                alert(xhr.responseText);
                form.reset();
            }
        };
        xhr.send(formData);
    });

    // Add event listener for the 'Clear' button
    const btnclear = document.getElementById('btnclear');
    const myForm = document.getElementById('detailform');
    btnclear.addEventListener('click', () => {
        myForm.reset();
    });
});


function loadLanguagesAndCategories() {
    var languageSelect = document.getElementById('languageSelect');
    var categorySelect = document.getElementById('categorySelect');

    // Load languages
    fetch('./get_languages.php')
        .then(response => response.json())
        .then(languages => {
            languages.forEach(language => {
                var option = document.createElement('option');
                option.value = language.id;
                option.textContent = language.name;
                languageSelect.appendChild(option);
            });
        })
        .catch(error => {
            console.error('Error loading languages:', error);
        });

    // Load categories
    fetch('./get_categories.php')
        .then(response => response.json())
        .then(categories => {
            categories.forEach(category => {
                var option = document.createElement('option');
                option.value = category.id;
                option.textContent = category.name;
                categorySelect.appendChild(option);
            });
        })
        .catch(error => {
            console.error('Error loading categories:', error);
        });
}


