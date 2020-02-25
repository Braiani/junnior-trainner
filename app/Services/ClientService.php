<?php


namespace App\Services;


use App\Repositories\ClientRepository;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class ClientService extends BaseService
{
    protected $clientRepository;

    /**
     * ClientService constructor.
     * @param $clientRepository
     */
    public function __construct(ClientRepository $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    public function create(Request $request)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('add', app($dataType->model_name));

        return view('clients.add', compact('dataType'));
    }

    public function show(Request $request, $id)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('read', app($dataType->model_name));

        $client = $this->clientRepository->findById($id, ['*'], ['contacts', 'indicatedBy']);

        return view('clients.view', compact('dataType', 'client'));
    }

    public function store(array $data)
    {
        $dataType = Voyager::model('DataType')->where('slug', 'clients')->first();

        // Check permission
        $this->authorize('add', app($dataType->model_name));

        $clientData = [
            'name' => $data['name'],
            'email' => $data['email'],
            'birthday' => $data['birthday'] ?? null,
            'gender' => $data['gender'] ?? null,
            'client_id' => $data['client_id'] ?? null,
        ];

        $client = $this->clientRepository->create($clientData);

        $numbers = $data['number'];
        $whatsapps = $data['whatsapp'];
        $instagrams = $data['instagram'];

        $contactList = [];

        foreach ($numbers as $key => $number) {
            $whatsapp = isset($whatsapps[$key]);
            $list = [
                'number' => $number,
                'whatsapp' => $whatsapp,
                'instagram' => $instagrams[$key] ?? null
            ];
            array_push($contactList, $list);
        }

        $client = $this->clientRepository->saveContactRelation($client, $contactList);

        return redirect()->route("voyager.clients.index")->with([
            'message'    => __('voyager::generic.successfully_added_new')." {$dataType->getTranslatedAttribute('display_name_singular')}",
            'alert-type' => 'success',
        ]);
    }
}
