$(document).ready(function() {
    var chatIcon = $("#chatIcon");
    var chatWindow = $(".chat-window");
    var messageInput = $("#message-input");
    var sendBtn = $("#send-btn");

    chatIcon.click(function() {
        chatWindow.toggle();
    });

    sendBtn.click(function() {
        var message = messageInput.val();
        if (message !== "") {
            addUserMessage(message);
            // Call function to handle the user's message
            handleUserMessage(message);
            messageInput.val("");
        }
    });

    function addUserMessage(message) {
        var userMessage = '<div class="user-message">' + message + '</div>';
        chatWindow.append(userMessage);
        chatWindow.scrollTop(chatWindow.prop("scrollHeight"));
    }

    function addBotMessage(message) {
        var botMessage = '<div class="bot-message">' + message + '</div>';
        chatWindow.append(botMessage);
        chatWindow.scrollTop(chatWindow.prop("scrollHeight"));
    }

    // Function to handle the user's message
    function handleUserMessage(message) {
        // Handle the user's message and generate a response
        // Replace the code below with your own logic
        var response = "This is a sample response.";
        addBotMessage(response);
    }
});

