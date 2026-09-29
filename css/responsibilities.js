function showResponsibilities(language) {

    // Hide all responsibility sections
    document
        .querySelectorAll('.responsibilities-content')
        .forEach(section => {

            section.classList.remove('active');

        });


    // Reset all language buttons
    document
        .querySelectorAll('.language-btn')
        .forEach(button => {

            button.classList.remove('active');

        });


    // Show selected language
    const selectedSection =
        document.getElementById(language);

    if (selectedSection) {

        selectedSection.classList.add('active');

    }


    // Highlight selected language button
    const selectedButton =
        document.getElementById(language + 'Btn');

    if (selectedButton) {

        selectedButton.classList.add('active');

    }

}