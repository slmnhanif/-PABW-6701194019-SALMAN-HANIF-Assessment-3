<?= $this->extend('layout/templates'); ?>
<?= $this->Section('content'); ?>


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
        <h1 class="mt-4"><i class="fas fa-table"></i> CRUD Data User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Crud Data</li>
            </ol>
            <div class="card mb-4">
                 <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Data Tabel
                </div>
                <div class="card-body">
                    <a href="" class="btn btn-success btn-sm mb-2" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus-square"></i> Tambah data</a>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama User</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Polyuria</th>
                                    <th>Polydipsia</th>
                                    <th>Sudden weightloss</th>
                                    <th>Weakness</th>
                                    <th>Polyphagia</th>
                                    <th>Genital thrush</th>
                                    <th>Visual blurring</th>
                                    <th>Itching</th>
                                    <th>Irritability</th>
                                    <th>Delayed healing</th>
                                    <th>Partial paresis</th>
                                    <th>Muscle stiffness</th>
                                    <th>Alopecia</th>
                                    <th>Obesity</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1;
                                foreach ($data as $datas) : ?>
                                    <tr>
                                        <td width="1%"><?= $no++; ?></td>
                                        <td><?= esc($datas['nama_user']); ?></td>
                                        <td><?= esc($datas['age']); ?></td>
                                        <td><?= esc($datas['gender']); ?></td>
                                        <td><?= esc($datas['polyuria']); ?></td>
                                        <td><?= esc($datas['polydipsia']); ?></td>
                                        <td><?= esc($datas['sudden_weight_loss']); ?></td>
                                        <td><?= esc($datas['weakness']); ?></td>
                                        <td><?= esc($datas['polyphagia']); ?></td>
                                        <td><?= esc($datas['genital_thrush']); ?></td>
                                        <td><?= esc($datas['visual_blurring']); ?></td>
                                        <td><?= esc($datas['itching']); ?></td>
                                        <td><?= esc($datas['irritability']); ?></td>
                                        <td><?= esc($datas['delayed_healing']); ?></td>
                                        <td><?= esc($datas['partial_paresis']); ?></td>
                                        <td><?= esc($datas['muscle_stiffness']); ?></td>
                                        <td><?= esc($datas['alopecia']); ?></td>
                                        <td><?= esc($datas['obesity']); ?></td>
                                        <td class="text-center" width="20%">
                                            <a href="" class="btn btn-success btn-sm mb-1" data-toggle="modal" data-target="#deleteModal<?= $datas['id']; ?>">
                                                Delete
                                            </a>
                                            <a href="" class="btn btn-success btn-sm mb-1" data-toggle="modal" data-target="#updateModal<?= $datas['id']; ?>">
                                                Update
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
        <!-- Add modal -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-square"></i> Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open('Diabetes/add_data'); ?>
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="">Nama User</label>
                        <input type="text" name="nama_user" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Age</label>
                        <input type="text" name="age" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label>
                        <input type="text" name="gender" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Polyuria</label>
                        <input type="text" name="polyuria" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Polydipsia</label>
                        <input type="text" name="polydipsia" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Sudden weightloss</label>
                        <input type="text" name="sudden_weight_loss" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Weakness</label>
                        <input type="text" name="weakness" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Polyphagia</label>
                        <input type="text" name="polyphagia" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Genital thrush</label>
                        <input type="text" name="genital_thrush" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Visual blurring</label>
                        <input type="text" name="visual_blurring" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Itching</label>
                        <input type="text" name="itching" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Irritability</label>
                        <input type="text" name="irritability" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Delayed healing</label>
                        <input type="text" name="delayed_healing" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Partial paresis</label>
                        <input type="text" name="partial_paresis" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Muscle stiffness</label>
                        <input type="text" name="muscle_stiffness" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Alopecia</label>
                        <input type="text" name="alopecia" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Obesity</label>
                        <input type="text" name="obesity" id="" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php foreach ($data as $datas) : ?>
    <div class="modal fade" id="deleteModal<?= $datas['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-circle"></i> Delete Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open('diabetes/delete_data/'.$datas['id']); ?>
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id" value="<?= $datas['id']; ?>">
                    <p>Click the submit button to delete data (<?= $datas['nama_user']; ?>)..!!!</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-sm">Submit</button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>


    <?php foreach ($data as $datas) : ?>
    <div class="modal fade" id="updateModal<?= $datas['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-circle"></i> Update Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open('diabetes/update_data/'.$datas['id']); ?>
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id" value="<?= $datas['id']; ?>">
                    <div class="form-group">
                        <label for="">Nama User</label>
                        <input type="text" name="nama_user" id="" class="form-control"  value="<?= $datas['nama_user']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Age</label>
                        <input type="text" name="age" id="" class="form-control" value="<?= $datas['age']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label>
                        <input type="text" name="gender" id="" class="form-control" value="<?= $datas['gender']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Polyuria</label>
                        <input type="text" name="polyuria" id="" class="form-control" value="<?= $datas['polyuria']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Polydipsia</label>
                        <input type="text" name="polydipsia" id="" class="form-control" value="<?= $datas['polydipsia']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Sudden weightloss</label>
                        <input type="text" name="sudden_weight_loss" id="" class="form-control" value="<?= $datas['sudden_weight_loss']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Weakness</label>
                        <input type="text" name="weakness" id="" class="form-control" value="<?= $datas['weakness']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Polyphagia</label>
                        <input type="text" name="polyphagia" id="" class="form-control" value="<?= $datas['polyphagia']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Genital thrush</label>
                        <input type="text" name="genital_thrush" id="" class="form-control" value="<?= $datas['genital_thrush']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Visual blurring</label>
                        <input type="text" name="visual_blurring" id="" class="form-control" value="<?= $datas['visual_blurring']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Itching</label>
                        <input type="text" name="itching" id="" class="form-control" value="<?= $datas['itching']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Irritability</label>
                        <input type="text" name="irritability" id="" class="form-control" value="<?= $datas['irritability']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Delayed healing</label>
                        <input type="text" name="delayed_healing" id="" class="form-control" value="<?= $datas['delayed_healing']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Partial paresis</label>
                        <input type="text" name="partial_paresis" id="" class="form-control" value="<?= $datas['partial_paresis']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Muscle stiffness</label>
                        <input type="text" name="muscle_stiffness" id="" class="form-control" value="<?= $datas['muscle_stiffness']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Alopecia</label>
                        <input type="text" name="alopecia" id="" class="form-control" value="<?= $datas['alopecia']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Obesity</label>
                        <input type="text" name="obesity" id="" class="form-control" value="<?= $datas['obesity']; ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-sm">Submit</button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

<?= $this->endSection(); ?>