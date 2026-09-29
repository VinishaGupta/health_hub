function showRights(language) {

    // Hide all rights sections
    document
        .querySelectorAll('.rights-content')
        .forEach(section => {

            section.classList.remove('active');

        });


    // Reset all language buttons
    document
        .querySelectorAll('.lang-btn')
        .forEach(button => {

            button.classList.remove('active-tab');

            button.classList.add(
                'bg-white',
                'text-sky-500'
            );

        });


    // Show selected language section
    const selectedSection =
        document.getElementById(language);

    if (selectedSection) {

        selectedSection.classList.add('active');

    }


    // Highlight selected language button
    const selectedButton =
        document.getElementById(language + 'Btn');

    if (selectedButton) {

        selectedButton.classList.add('active-tab');

        selectedButton.classList.remove(
            'bg-white',
            'text-sky-500'
        );

    }

}