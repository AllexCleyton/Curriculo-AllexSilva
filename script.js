document
.getElementById('add-data-form')
.addEventListener('submit', function(e){

    e.preventDefault();

    const formData = new FormData(this);

    fetch('add_data.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        const respDiv = document.getElementById('responseMessage');
        if (respDiv) {
            respDiv.textContent = data.message || '';
            respDiv.className = data.success ? 'form-message success' : 'form-message error';
        } else {
            alert(data.message);
        }

        if (data.success) {
            this.reset();
            loadData();
        }

    })
    .catch(error => {
        console.error(error);
    });

});

function loadData() {

    fetch('load_data.php')
        .then(response => response.json())
        .then(data => {
            const skillsList = document.getElementById('skills-list');
            const experienceList = document.getElementById('experience-list');

            if (skillsList && Array.isArray(data.skills)) {
                skillsList.innerHTML = '';
                data.skills.forEach(skill => {
                    const li = document.createElement('li');
                    li.textContent = skill;
                    skillsList.appendChild(li);
                });
            }

            if (experienceList && Array.isArray(data.experiences)) {
                experienceList.innerHTML = '';
                data.experiences.forEach(exp => {
                    const li = document.createElement('li');
                    li.textContent = exp;
                    experienceList.appendChild(li);
                });
            }
        });
}

window.onload = loadData;