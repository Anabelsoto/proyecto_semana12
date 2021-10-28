<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCita_detalleRequest;
use App\Http\Requests\UpdateCita_detalleRequest;
use App\Repositories\Cita_detalleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Cita_detalleController extends AppBaseController
{
    /** @var  Cita_detalleRepository */
    private $citaDetalleRepository;

    public function __construct(Cita_detalleRepository $citaDetalleRepo)
    {
        $this->citaDetalleRepository = $citaDetalleRepo;
    }

    /**
     * Display a listing of the Cita_detalle.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $citaDetalles = $this->citaDetalleRepository->all();

        return view('cita_detalles.index')
            ->with('citaDetalles', $citaDetalles);
    }

    /**
     * Show the form for creating a new Cita_detalle.
     *
     * @return Response
     */
    public function create()
    {
        return view('cita_detalles.create');
    }

    /**
     * Store a newly created Cita_detalle in storage.
     *
     * @param CreateCita_detalleRequest $request
     *
     * @return Response
     */
    public function store(CreateCita_detalleRequest $request)
    {
        $input = $request->all();

        $citaDetalle = $this->citaDetalleRepository->create($input);

        Flash::success('Cita Detalle saved successfully.');

        return redirect(route('citaDetalles.index'));
    }

    /**
     * Display the specified Cita_detalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $citaDetalle = $this->citaDetalleRepository->find($id);

        if (empty($citaDetalle)) {
            Flash::error('Cita Detalle not found');

            return redirect(route('citaDetalles.index'));
        }

        return view('cita_detalles.show')->with('citaDetalle', $citaDetalle);
    }

    /**
     * Show the form for editing the specified Cita_detalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $citaDetalle = $this->citaDetalleRepository->find($id);

        if (empty($citaDetalle)) {
            Flash::error('Cita Detalle not found');

            return redirect(route('citaDetalles.index'));
        }

        return view('cita_detalles.edit')->with('citaDetalle', $citaDetalle);
    }

    /**
     * Update the specified Cita_detalle in storage.
     *
     * @param int $id
     * @param UpdateCita_detalleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCita_detalleRequest $request)
    {
        $citaDetalle = $this->citaDetalleRepository->find($id);

        if (empty($citaDetalle)) {
            Flash::error('Cita Detalle not found');

            return redirect(route('citaDetalles.index'));
        }

        $citaDetalle = $this->citaDetalleRepository->update($request->all(), $id);

        Flash::success('Cita Detalle updated successfully.');

        return redirect(route('citaDetalles.index'));
    }

    /**
     * Remove the specified Cita_detalle from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $citaDetalle = $this->citaDetalleRepository->find($id);

        if (empty($citaDetalle)) {
            Flash::error('Cita Detalle not found');

            return redirect(route('citaDetalles.index'));
        }

        $this->citaDetalleRepository->delete($id);

        Flash::success('Cita Detalle deleted successfully.');

        return redirect(route('citaDetalles.index'));
    }
}
