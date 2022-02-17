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
    loginButton.setAttribute('title', 'Entrar na Plataforma');
    loginButton.setAttribute('href', '');
    loginButton.innerHTML = 'Login';

    // Changes the background color of body according to the state of Dark Mode
    if (isDark == true) {
        document.body.className = "dark";
        
        let src = document.getElementById('logo').getAttribute('src');
        src = src.replace('logo','logo-dark');
        document.getElementById('logo').setAttribute('src',src);

        let srcset = document.getElementById('logo').getAttribute('srcset');
        srcset = srcset.replaceAll('logo','logo-dark');
        document.getElementById('logo').setAttribute('srcset',srcset);

    } else {
        document.getElementById("dark-mode").checked = false;
    }

    if (window.matchMedia("(orientation: portrait)").matches) {
        document.getElementById("menu-label").insertBefore(darkSwitch, document.getElementById("menu-label").firstChild);
        console.log('Mobile');
    } else {
        document.getElementById("header-right").appendChild(darkSwitch);
        document.getElementById("header-right").appendChild(loginButton);
        console.log('Not Mobile');
    }

    // Logs the Dark Mode state
    console.log("Dark Mode Enabled by Default: " + isDark);
}

function darkMode() {
    // Detects the state of the Dark Mode <input> (checked or not checked)
    var isDark = document.getElementById("dark-mode").checked;

    // Changes the background color of body according to the state of Dark Mode
    if (isDark == true) {
        document.body.className = "dark";

        let src = document.getElementById('logo').getAttribute('src');
        src = src.replace('logo','logo-dark');
        document.getElementById('logo').setAttribute('src',src);

        let srcset = document.getElementById('logo').getAttribute('srcset');
        srcset = srcset.replaceAll('logo','logo-dark');
        document.getElementById('logo').setAttribute('srcset',srcset);

        console.log("Dark Mode is enabled.");
    } else {
        document.body.removeAttribute('class');
        
        let src = document.getElementById('logo').getAttribute('src');
        src = src.replace('logo-dark','logo');
        document.getElementById('logo').setAttribute('src',src);

        let srcset = document.getElementById('logo').getAttribute('srcset');
        srcset = srcset.replaceAll('logo-dark','logo');
        document.getElementById('logo').setAttribute('srcset',srcset);

        console.log("Dark Mode is disabled.");
    }

    // Stores the current state of the Dark Mode within localStorage
    localStorage.setItem("darkMode", isDark);

}