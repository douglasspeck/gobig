function darkModeSetup() {

    // Detects whether there is the variable 'darkmode' stored or not
    // If there is no value, stores TRUE
    if (localStorage.getItem("darkMode") == null) {
        localStorage.setItem("darkMode", false);
    }

    // Converts the stored value (type:string) to a boolean
    var isDark = (localStorage.getItem("darkMode") == "true") ? true : false;

    // Creates a <label> to switch Dark Mode
    var darkSwitch = document.createElement('label');
    darkSwitch.setAttribute('for', 'dark-mode');

    var loginButton = document.createElement('a');
    loginButton.setAttribute('title', '');
    loginButton.setAttribute('href', '');
    loginButton.innerHTML = 'Login';

    // Changes the background color of body according to the state of Dark Mode
    if (isDark == true) {
        document.body.className = "dark";
        document.getElementById("logo").setAttribute('src','IMG/Logo/logo-dark.png');
    } else {
        document.getElementById("dark-mode").checked = false;
    }

    document.getElementById("header-right").appendChild(darkSwitch);
    document.getElementById("header-right").appendChild(loginButton);

    // Logs the Dark Mode state
    console.log("Dark Mode Enabled by Default: " + isDark);
}

function darkMode() {
    // Detects the state of the Dark Mode <input> (checked or not checked)
    var isDark = document.getElementById("dark-mode").checked;

    // Changes the background color of body according to the state of Dark Mode
    if (isDark == true) {
        document.body.className = "dark";
        document.getElementById("logo").setAttribute('src','IMG/Logo/logo-dark.png');
        console.log("Dark Mode is enabled.");
    } else {
        document.body.className = "";
        document.getElementById("logo").setAttribute('src','IMG/Logo/logo.png');
        console.log("Dark Mode is disabled.");
    }

    // Stores the current state of the Dark Mode within localStorage
    localStorage.setItem("darkMode", isDark);

}