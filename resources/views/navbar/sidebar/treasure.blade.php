@extends('layouts.main')

@section('title', 'Treasure')

@section('content')
<div class="page-heading">
    <h3>Treasure</h3>
</div>

<section id="basic-horizontal-layouts">
    <Form Action="treasure/add_treasure" Method="Post">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Treasure</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="checkpermata">Check Permata</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="checkpermata" class="form-control" name="permata"
                                                placeholder="Permata" onkeyup="splitInDots(this)">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="checkbca">Check BCA</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="checkbca" class="form-control" name="bca"
                                                placeholder="BCA" onkeyup="splitInDots(this)">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="cash">Cash</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="cash" class="form-control" name="cash"
                                                placeholder="Cash" onkeyup="splitInDots(this)">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="out">Out</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="out" class="form-control" name="out"
                                                placeholder="Out" onkeyup="splitInDots(this)">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="possibility">Possibility</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="possibility" class="form-control" name="possibility"
                                                placeholder="Possibility" onkeyup="splitInDots(this)">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="target">Target</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="target" class="form-control" name="target" readonly value="">
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Form>
</section>

<!-- Basic Tables start -->
<section class="section">
        <div class="row" id="basic-table">
            <div class="col-12 col-md-12">
                <div class="card">
                    <!-- <div class="card-header">
                        <h4 class="card-title">Table without outer spacing</h4>
                    </div> -->
                    <div class="card-content">
                        <!-- <div class="card-body">
                            <p class="card-text">Using the most basic table up, here’s how
                                <code>.table</code>-based tables look in Bootstrap. You can use any example
                                of below table for your table and it can be use with any type of bootstrap tables.
                            </p>
                        </div> -->

                        <!-- Table with no outer spacing -->
                        <div class="table-responsive">
                            <table class="table mb-0 table-lg">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Target</th>
                                        <th>Check Permata</th>
                                        <th>Check BCA</th>
                                        <th>Cash</th>
                                        <th>Total</th>
                                        <th>Out</th>
                                        <th>Possibility</th>
                                        <th>Space Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


            

@endsection