var username = "Sekolah";
var password = "7Hari!";


usernameRegex = /[^a-zA-Z]/;
passwordRegex = /7.+[a-zA-Z0-9]/;

if (!usernameRegex.test(username)) {
    print('username valid!');
} else {
    print('username tidak valid!');
}

if (passwordRegex.test(password)) {
    print('password valid!');
} else {
    print('password tidak valid!');
}