// Disable right-click
document.addEventListener("contextmenu", (event) => {
    event.preventDefault();
});

// Disable specific key actions
document.addEventListener("keydown", (event) => {
    // Prevent Ctrl key combinations
    if (event.ctrlKey) {
        event.preventDefault();
    }

    // Prevent Shift key combinations
    if (event.shiftKey) {
        event.preventDefault();
    }

    // Prevent Print Screen
    if (event.key === "PrintScreen") {
        event.preventDefault();
    }

    // Prevent F12 (Developer Tools)
    if (event.key === "F12") {
        event.preventDefault();
    }
});

// Optional: Disable mouse shortcuts like Ctrl+Shift+I
document.addEventListener("keyup", (event) => {
    if (event.ctrlKey || event.shiftKey) {
        event.preventDefault();
    }
});
