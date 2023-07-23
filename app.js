window.onscroll = () => {
    const techBoxes = document.getElementById('tech-boxes');
    const techBoxesRect = techBoxes.getBoundingClientRect();
    const windowHeight = window.innerHeight;

    if (techBoxesRect.top <= windowHeight && techBoxesRect.bottom >= 0) {
        techBoxes.classList.add('show');
        window.removeEventListener('scroll', onScrollHandler);
    }
};

function onScrollHandler() {
    const techBoxes = document.getElementById('tech-boxes');
    const techBoxesRect = techBoxes.getBoundingClientRect();
    const windowHeight = window.innerHeight;

    if (techBoxesRect.top <= windowHeight && techBoxesRect.bottom >= 0) {
        techBoxes.classList.add('show');
        window.removeEventListener('scroll', onScrollHandler);
    }
}

window.addEventListener('scroll', onScrollHandler);



// TABS WORKING JS 
function scrollToSkills() {
    var skillsDiv = document.getElementById("skills");
    skillsDiv.scrollIntoView({ behavior: "smooth" });
    
}

function backToTop(){
    var homeDiv = document.getElementById('home');
    homeDiv.scrollIntoView({behavior : "smooth"});
}

function scrollToProjects(){
    var projectDiv = document.getElementById("projects");
    projectDiv.scrollIntoView({behavior : "smooth"});
}

function scrollToContact(){
    var contactDiv = document.getElementById("contact");
    contactDiv.scrollIntoView({behavior : "smmoth"});
}