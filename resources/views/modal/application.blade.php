@if($glob_profile->status===3 && isset($application))
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Intern Work Details</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-responsive-sm my-3 table-hover table-bordered">
                        <tr>
                            <th>Destination</th>
                            <td>{{ $application->destination }}</td>
                        </tr>
                        <tr>
                            <th>Program</th>
                            <td>{{ $application->program }}</td>
                        </tr>
                        <tr>
                            <th>Duration</th>
                            <td>{{ $application->duration }}</td>
                        </tr>
                        <tr>
                            <th>Order Date</th>
                            <td>{{ \Carbon\Carbon::parse($application->created_at) }}</td>
                        </tr>
                        <tr>
                            <th>Total Amount</th>
                            <td>{{ $application->fees }}</td>
                        </tr>
                        <tr>
                            <th>Payment Method</th>
                            <td>{{ $application->payment_method }}</td>
                        </tr>
                        <tr>
                            <th>Payment Status</th>
                            <td>{{ $application->payment_status }}</td>
                        </tr>
                        <tr>
                            <th>Application Status</th>
                            <td>{{ $application->approve_status }}</td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endif
