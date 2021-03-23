<div class="col-md-10">
    <!-- Page-header start -->
    <div class="page-header" style="margin-left: -49px">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">OrderTable</h5>
                        <p class="m-b-0">Welcome to Jack Restaurant</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <h2 style="font-weight: 450;
    font-size: 2em;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    overflow: hidden;
    font-family: Yantramanav;">Information </h2>
    <br>
    <table class="table">
        <thead class="thead">
            <tr>
                <th scope="col">Table Number</th>
                <th scope="col">Time</th>
                <th scope="col">Date</th>
                <th scope="col">Person</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            //Trả về chuỗi HTML
            function makeUserRow($user, $no = null)
            {
                return ' <tr class="">
                                    <th class="align-middle" scope="row">' . $no . '</th>
                                    <td class="align-middle">' . $user->username . '</td>
                                    <td class="align-middle">' . $user->firstName . '</td>
                                    <td class="align-middle">' . $user->lastName . '</td>
                                    <td class="align-middle">' . $user->address . '</td>
                                    <td class="align-middle">' . $user->city . '</td>
                                    <td class="align-middle">' . $user->position . '</td>
                                    <td> <a href="?controller=admin&action=user_edit&userID=' . $user->userID . '" class="btn btn-dark">Edit</a></td>
                                    <td> <form class="d-inline" onsubmit="return confirm(\"Do you want to remove' . $user->username . '"\)" action="?controller=admin&action=user_delete&userID=' . $user->userID . '" method="POST">
                                    <button type="submit" class="btn btn-link">Remove</button>
                                  </form></td>                            
                                </tr>';
            }
            foreach ($user as $key => $user) {
                echo makeUserRow($user, $key + 1);
            }
            ?>

        </tbody>
    </table>
</div>