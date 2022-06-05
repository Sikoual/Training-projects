const sportPrice = {
  football: '100€',
  basketball: '120€',
  volleyball: '80€',
  tennis: '90€',
  rugby: '100€',
};

const sportList = document.querySelector('#sport');
const displayPrice = document.querySelector('.sport-price');

sportList.addEventListener('change', (e) => {
  const selectSport = document.querySelector('#sport').value;
  switch (selectSport) {
    case 'football':
      displayPrice.textContent = `La cotisation annuelle pour le football est de ${sportPrice.football}`;
      break;
    case 'basketball':
      displayPrice.textContent = `La cotisation annuelle pour le basketball est de ${sportPrice.basketball}`;
      break;
    case 'volleyball':
      displayPrice.textContent = `La cotisation annuelle pour le volleyball est de ${sportPrice.volleyball}`;
      break;
    case 'tennis':
      displayPrice.textContent = `La cotisation annuelle pour le tennis est de ${sportPrice.tennis}`;
      break;
    case 'rugby':
      displayPrice.textContent = `La cotisation annuelle pour le rugby est de ${sportPrice.rugby}`;
  }
});
