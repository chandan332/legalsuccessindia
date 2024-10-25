<div>
    <div class="table-responsive">
        <table class="table table-sm table-light table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <!-- <th scope="col">Email</th> -->
                    <th scope="col">Phone</th>
                    <th scope="col">State</th>
                    <!-- <th scope="col">Message</th> -->
                    <th scope="col">delete</th>
                    <th scope="col">status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($this->clients as $client)
                    <livewire:admin.table-row :key="$client->client_id" :client="$client" :index="$loop->iteration" :status="$client->status"  />
                @endforeach
            </tbody>
        </table>
    </div>
</div>
