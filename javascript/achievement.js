function checkAchievements(score) {
    if (score >= 100) {
        addAchievement ("Achieved 100 score!");
    }
    if (score >= 1000) {
        addAchievement ("Achieved 1000 score!");
    }
    if (score >= 10000) {
        addAchievement ("Achieved 10.000 score!");
    }
    if (score >= 50000) {
        addAchievement ("Achieved 50.000 score!");
    }
    if (score >= 100000) {
        addAchievement ("Achieved 100.000 score!");
    }
    if (score >= 1000000) {
        addAchievement ("Achieved 1.000.000 score!");
    }
}

function addAchievement(achievement) {
    const achievementList = document.getElementById("achievementList");
    const achievementItem = document.createElement("div");
    achievementItem.textContent = achievement;
    achievementList.appendChild(achievementItem);
    // Apply "achieved" class after a brief delay to trigger the CSS animation
    setTimeout(() => {
        achievementItem.classList.add("achieved");
    }, 100);
}
