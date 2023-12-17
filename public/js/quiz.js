$(document).ready(function () {
    // Attach change event handler to radio buttons
    $('input[type="radio"]').change(function () {
        // Remove the class from all answer containers
        $(this).parent().parent().find('.quiz-answer-text-container-single').removeClass(
            'selected-answer');

        // Add the class to the selected answer container
        $(this).parent().find('.quiz-answer-text-container-single').addClass('selected-answer');
    });

    // Attach click event handler to submit button
    $('button.submit_button').click(function () {
        //If there any unanswered questions
        if ($('.question_div:not(:has(:radio:checked))').length) {
            //Alert user, showing unanswered question
            alert("Вы не ответили на вопрос - " + $('.question_div:not(:has(:radio:checked))').first().find('.quiz-question-text-item').text());
        }
    });
});