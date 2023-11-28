const formEl = document.querySelector('.main-form');

const titleInput = document.querySelector('#tab-name');
const descriptionInput = document.querySelector('#tab-description');

formEl.addEventListener('submit', async (e) => {
  e.preventDefault();

  const title = titleInput.value;
  const description = descriptionInput.value;

  await addTab(title, description);

  titleInput.value = '';
  descriptionInput.value = '';
});

const addTab = async(title, description) => {
  console.log('hey');
  const newTab = {title, description};

  const response = await fetch('create-tab.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(newTab),
  });

  console.log(response);
}