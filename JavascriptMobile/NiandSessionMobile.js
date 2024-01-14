function AddQuestion(event) {
    let container = event.currentTarget.closest('.bottomCreationNianda');
    let iconSend = container.querySelector('.fa-solid.fa-paper-plane');
    let robot = container.querySelector('.fa-solid.fa-robot');

    if (event.target.value.trim() !== '') {
        iconSend.style.display = 'flex';
        robot.style.display = 'none';
    } else {
        iconSend.style.display = 'none';
        robot.style.display = 'flex';
    }
}

