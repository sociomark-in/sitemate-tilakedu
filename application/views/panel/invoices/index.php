<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css"> -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <title>Document</title>
</head>

<body>
    <header>
        <?php $this->load->view("components/_common_nav") ?>
    </header>
    <main>
        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">
                                Invoices
                            </div>
                            <h2 class="page-title">
                                Invoice #
                            </h2>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-auto ms-auto d-print-none">
                            <button type="button" class="btn btn-primary" onclick="javascript:window.print();">
                                <!-- Download SVG icon from http://tabler-icons.io/i/printer -->
                                <i class="ti ti-printer"></i>
                                Print Invoice
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page body -->
            <div class="page-body py-3">
                <div class="container-xl">
                    <div class="card card-lg">
                        <div class="card-body">
                            <div class="printable">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="h3">Company</p>
                                        <address>
                                            Street Address<br>
                                            State, City<br>
                                            Region, Postal Code<br>
                                            ltd@example.com
                                        </address>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p class="h3">Client</p>
                                        <address>
                                            Street Address<br>
                                            State, City<br>
                                            Region, Postal Code<br>
                                            ctr@example.com
                                        </address>
                                    </div>
                                    <div class="col-12 my-5">
                                        <h1>Invoice INV/001/15</h1>
                                    </div>
                                </div>
                                <div class="table-wrapper">
                                    <table class="table table-transparent table-responsive">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="width: 1%"></th>
                                                <th>Product</th>
                                                <th class="text-center" style="width: 1%">Qnt</th>
                                                <th class="text-end" style="width: 1%">Unit</th>
                                                <th class="text-end" style="width: 1%">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>
                                                    <p class="strong mb-1">Logo Creation</p>
                                                    <div class="text-secondary">Logo and business cards design</div>
                                                </td>
                                                <td class="text-center">
                                                    1
                                                </td>
                                                <td class="text-end"><?= number_to_currency(1800, "INR", 2) ?></td>
                                                <td class="text-end"><?= number_to_currency(1800, "INR", 2) ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>
                                                    <p class="strong mb-1">Online Store Design &amp; Development</p>
                                                    <div class="text-secondary">Design/Development for all popular modern browsers</div>
                                                </td>
                                                <td class="text-center">
                                                    1
                                                </td>
                                                <td class="text-end"><?= number_to_currency(20000, "INR", 2) ?></td>
                                                <td class="text-end"><?= number_to_currency(20000, "INR", 2) ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>
                                                    <p class="strong mb-1">App Design</p>
                                                    <div class="text-secondary">Promotional mobile application</div>
                                                </td>
                                                <td class="text-center">
                                                    1
                                                </td>
                                                <td class="text-end"><?= number_to_currency(3200, "INR", 2) ?></td>
                                                <td class="text-end"><?= number_to_currency(3200, "INR", 2) ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="strong text-end">Subtotal</td>
                                                <td class="text-end"><?= number_to_currency(25000, "INR", 2) ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="strong text-end">Vat Rate</td>
                                                <td class="text-end">20%</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="strong text-end">Vat Due</td>
                                                <td class="text-end"><?= number_to_currency(5000, "INR", 2) ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="font-weight-bold text-uppercase text-end">Total Due</td>
                                                <td class="font-weight-bold text-end"><?= number_to_currency(30000, "INR", 2) ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p class="text-secondary text-center mt-5">Thank you very much for doing business with us. We look forward to working with
                                    you again!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php $this->load->view('components/_common_footer') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script> -->
</body>

</html>