<?php


namespace App\Services;


use App\Repositories\ContactRepository;

class ContactService extends BaseService
{
    protected $contactRepository;

    /**
     * ContactService constructor.
     * @param $contactRepository
     */
    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function update(array $data, $id)
    {
        $data['whatsapp'] = isset($data['whatsapp']);

        try {
            $this->contactRepository->update($data, $id);
        }catch (\Exception $exception) {
            abort(406);
        }

        return $this->contactRepository->findById($id);
    }

    public function store(array $data)
    {
        $data['whatsapp'] = isset($data['whatsapp']);

        return $this->contactRepository->create($data);
    }

    public function destroy($id)
    {
        try {
            $this->contactRepository->delete($id);
        }catch (\Exception $exception) {
            abort(406);
        }
        return $id;
    }
}
