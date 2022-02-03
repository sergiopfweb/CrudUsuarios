window.addEventListener('load', init);

function init() {
	updateForm.addEventListener('submit', updateUser);
	deleteForm.addEventListener('submit', deleteUser);

	var tBody = document.getElementById('table-body');
	tBody.addEventListener('click', (clickEvent) => {

		if (clickEvent.target.nodeName == 'BUTTON') {
			let id = clickEvent.target.getAttribute('data-id');

			if (clickEvent.target.id.startsWith('view-btn-')) {
				let name = clickEvent.target.getAttribute('data-name');
				let email = clickEvent.target.getAttribute('data-email');
				let usuario = clickEvent.target.getAttribute('data-usuario');
                
                updateForm.id.value = id;
				updateForm.name.value = name;
                updateForm.email.value = email;
				updateForm.usuario.value = usuario;
				
				var updateModal = document.getElementById('update-modal');
				updateModal.style.display = 'block';

			} else if (clickEvent.target.id.startsWith('delete-btn-')) {
				deleteForm.id.value = id;
				var deleteModal = document.getElementById('delete-modal');
				deleteModal.style.display = 'block';
			}
		}

			var spanUpdateClose = document.getElementById('update-close-modal');
			spanUpdateClose.addEventListener('click', () => {
			document.getElementById('update-modal').style.display = 'none';
		});

			var spanDeleteClose = document.getElementById('delete-close-modal');
			spanDeleteClose.addEventListener('click', () => {
			document.getElementById('delete-modal').style.display = 'none';
		});
			var deleteCancelButton = document.getElementById('delete-cancel-modal');
			deleteCancelButton.addEventListener('click', () => {
			document.getElementById('delete-modal').style.display = 'none';
		});
	});
}

function deleteUser(evt) {
	evt.preventDefault();

	var id = deleteForm.id.value;
	var token = deleteForm.token.value;

	var formData = new FormData();
	formData.append('id', id);
	formData.append('token', token);
	formData.append('task', 'delete');

	fetch('../includes/crud.php', {
		method: 'POST',
		body: formData
	}).then((response) => {
			if (response.ok) {
				return response.text();
			} else {
				throw new Error('Petición fallida');
			}
		}).then((message) => {
			showSnackBar(message);
			var deleteModal = document.getElementById('delete-modal');
			deleteModal.style.display = 'none';
			deleteUserInTable();
		}).catch((error) => {
			showSnackBar(error.message, true);
		});
}
function deleteUserInTable() {
	var id = deleteForm.id.value;
	var rowElement = document.getElementById('row-' + id);
	rowElement.remove();
}

function updateUser(evt) {
	evt.preventDefault();
	var name = updateForm.name.value;
    var email = updateForm.email.value;
	var usuario = updateForm.usuario.value;
	
	var id = updateForm.id.value;
	var token = updateForm.token.value;

	var formData = new FormData();
	formData.append('name', name);
    formData.append('email', email);
	formData.append('usuario', usuario);
    
	formData.append('id', id);
	formData.append('token', token);
	formData.append('task', 'update');

	fetch('../includes/crud.php', {
		method: 'POST',
		body: formData
	}).then((response) => {
			if (response.ok) {
				return response.text();
			} else {
				throw new Error('Petición fallida');
			}
		})
		.then((message) => {
			showSnackBar(message);
			// console.log(message);
			var updateModal = document.getElementById('update-modal');
			updateModal.style.display = 'none';
			updateInTableWithForm();
		})
		.catch((error) => {
			showSnackBar(error.message, true);
		});
}

function updateInTableWithForm() {
	var id = updateForm.id.value;
	var rowElement = document.getElementById('row-' + id);
	var columnElements = rowElement.getElementsByTagName('td');

	var newData = {};
	newData['id-' + id] = id;
	newData['name-' + id] = updateForm.name.value;
    newData['email-' + id] = updateForm.email.value;
    newData['usuario-' + id] = updateForm.usuario.value;
	

	for (var i = 0; i < columnElements.length; i++) {
		let column = columnElements[i];
		if (newData[column.id]) {
			column.innerHTML = newData[column.id];
		}
		if (column.id.startsWith('actions-')) {
			let viewButton = document.getElementById('view-btn-' + id);
			viewButton.setAttribute('data-name', updateForm.name.value);
			viewButton.setAttribute('data-email', updateForm.email.value);
			viewButton.setAttribute('data-usuario', updateForm.usuario.value);
		}
	}
}

function showSnackBar(message, isError = false) {
	var snackbar = document.getElementById('snackbar');
	snackbar.innerHTML = message;
	snackbar.className = 'show';
	if (isError) {
		snackbar.classList.add('error');
	}
	setTimeout(() => {
		snackbar.className = snackbar.className.replace('show', '');
	}, 3000);
}
