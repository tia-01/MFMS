function editProfile() {
    document.getElementById('profileInfo').style.display = 'none';
    document.getElementById('editProfileForm').style.display = 'block';

    // Populate edit form with current profile info
    var name = document.getElementById('name').innerText;
    var email = document.getElementById('address').innerText;
    var email = document.getElementById('email').innerText;
    var email = document.getElementById('phone no').innerText;
    document.getElementById('editName').value = name;
    document.getElementById('editAddress').value = name;
    document.getElementById('editEmail').value = email;
    document.getElementById('editPhone').value = name;

}

function saveProfile() {
    var newName = document.getElementById('editName').value;
    var newAddress = document.getElementById('editAddress').value;
    var newEmail = document.getElementById('editEmail').value;
    var newPhone = document.getElementById('editPhone').value;


    // Update profile info
    document.getElementById('name').innerText = newName;
    document.getElementById('address').innerText = newAddress;
    document.getElementById('email').innerText = newEmail;
    document.getElementById('phone').innerText = newPhone;


    // Show profile info and hide edit form
    document.getElementById('profileInfo').style.display = 'block';
    document.getElementById('editProfileForm').style.display = 'none';
}
