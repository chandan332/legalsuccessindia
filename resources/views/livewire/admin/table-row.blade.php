<tr>
    <th scope="row">{{ $index }}</th>
    <td>{{ $client->name }}</td>
    <!-- <td>{{ $client->email }}</td> -->
    <td>{{ $client->phone }}</td>
    <td>{{ $client->state }}</td>
    <!-- <td>{{ $client->message }}</td> -->
    <td>
        <button wire:click="delete('{{ $client->client_id }}')" class="btn btn-sm">
            <i class="fa-solid fa-trash"></i>
        </button>
    </td>
    <td>
        <div class="tw-flex tw-items-center">
            <input 
                wire:model='status'
                type="checkbox"
                class="tw-w-4 tw-h-4 tw-text-blue-600 tw-bg-gray-100 tw-border-gray-300 tw-rounded  dark:tw-bg-gray-700 dark:tw-border-gray-600"
                wire:change="changeStatus('{{ $client->client_id }}')"
                @checked($client->status === 1)
            />
        </div>
    </td>
</tr>
