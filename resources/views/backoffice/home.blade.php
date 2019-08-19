<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" href="/css/backoffice.css">
    <title>Document</title>

    <style>
            main{
                margin-top: 50px !important;
                
            }
    </style>
</head>

<body>
    @include('partials.header')

    <main class="container">
    <div class='columns'>
        <div class='container profile'>
            <div class='modal' id='edit-preferences-modal'>
                <div class='modal-background'></div>
                <div class='modal-card'>
                    <header class='modal-card-head'>
                        <p class='modal-card-title'>Edit Profile</p>
                        <button class='delete'></button>
                    </header>
                    <section class='modal-card-body'>
                        <label class='label'>Name</label>
                        <p class='control'>
                            <input class='input' type='text' value="{{ $user->name }}">
                        </p>
                        <label class='label'>Email</label>
                        <p class='control has-icon has-icon-right'>
                            <input class='input' placeholder='Email input' type='text' value='{{ $user->email }}'>
                        </p>
                        <label class='label'>Avatar</label>
                        <p class='control has-icon has-icon-right'>
                            <input class='input' placeholder='Email input' type='text' value='{{ $user->avatar }}'>
                        </p>
                    </section>
                    <footer class='modal-card-foot'>
                        <a class='button is-primary modal-save'>Save changes</a>
                        <a class='button modal-cancel'>Cancel</a>
                    </footer>
                </div>
            </div>
            <div class='section profile-heading'>
                <div class='columns is-mobile is-multiline'>
                    <div class='column is-2'>
                        <span class='header-icon user-profile-image'>
                            <img alt='' src='{{ $user->avatar }}'>
                        </span>
                    </div>
                    <div class='column is-4-tablet is-10-mobile name'>
                        <p>
                            <span class='title is-bold'>{{ $user->name }}</span>
                            <br>
                            <a class='button is-primary is-outlined' href='#' id='edit-preferences'
                                style='margin: 5px 0'>
                                Edit Profile
                            </a>
                            <br>
                        </p>
                    </div>
                    <div class='column is-2-tablet is-4-mobile has-text-centered'>
                        <p class='stat-val'>30</p>
                        <p class='stat-key'>Own Projects</p>
                    </div>
                    <div class='column is-2-tablet is-4-mobile has-text-centered'>
                        <p class='stat-val'>10</p>
                        <p class='stat-key'>Funded projects</p>
                    </div>
                    <div class='column is-2-tablet is-4-mobile has-text-centered'>
                        <p class='stat-val'>3</p>
                        <p class='stat-key'>last project Funds</p>
                    </div>
                </div>
            </div>
            <div class='profile-options is-fullwidth'>
                <div class='tabs is-fullwidth is-medium'>
                    <ul>
                        <li class='link'>
                            <a>
                                <span class='icon'>
                                    <i class='fa fa-list'></i>
                                </span>
                                <span>Projects</span>
                            </a>
                        </li>
                        <li class='link is-active'>
                            <a>
                                <span class='icon'>
                                    <i class='fa fa-thumbs-up'></i>
                                </span>
                                <span>Categories</span>
                            </a>
                        </li>
                        <li class='link'>
                            <a>
                                <span class='icon'>
                                    <i class='fa fa-search'></i>
                                </span>
                                <span>Comments</span>
                            </a>
                        </li>
                        <li class='link'>
                            <a>
                                <span class='icon'>
                                    <i class='fa fa-balance-scale'></i>
                                </span>
                                <span>Users</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            
        </div>
    </div>
</main>


<script>
document.getElementById("edit-preferences").onclick = toggleEditDialog;
document.querySelector('.delete').onclick = toggleEditDialog;
document.querySelector('.modal-save').onclick = toggleEditDialog;
document.querySelector('.modal-cancel').onclick = toggleEditDialog;

function toggleEditDialog() {
    document.getElementById('edit-preferences-modal').classList.toggle('is-active');
    
}
</script>
</body>

</html>
