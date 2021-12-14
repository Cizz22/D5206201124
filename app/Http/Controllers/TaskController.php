<?php

namespace App\Http\Controllers;

use App\Pegawai;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Task::join('pegawai', 'IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('tugas.*', 'pegawai.pegawai_nama')
        ->paginate(7);
        return view('task.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Pegawai::all();
        return view('task.tambah', compact(['data']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Task::create([
            'NamaTugas' => $request->task_name,
            'IDPegawai' => $request->pegawai,
            'Tanggal' => $request->tanggal
            ]);

            return redirect("/task");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tugas = Task::where('ID',  $id)
        ->join('pegawai','IDPegawai', '=','pegawai.pegawai_id')
        ->select('tugas.*','pegawai.pegawai_nama')
        ->first();
        return view('task.show', compact(['tugas']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Task::where('ID', $id)->first();
        $pegawai = Pegawai::all();
        return view("task.edit", compact(['data', 'pegawai']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Task::where('ID', $id)->update([
            'NamaTugas' => $request->task_name,
            'IDPegawai' => $request->pegawai,
            'Tanggal' => $request->tanggal,
            'Status' => $request->status
        ]);

        return redirect("/task");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function hapus($id){
        Task::where('ID', $id)->delete();

        return redirect("/task")->with(['success', 'Hapus data berhasil;']);
    }


    public function cari(Request $request)
    {
        $data = Task::join('pegawai', 'IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('tugas.*', 'pegawai.pegawai_nama')
        ->where('NamaTugas','like','%'.$request->cari.'%')
        ->orWhere('pegawai_nama', 'like', '%'.$request->cari.'%')
        ->paginate();

        return view('task.index', ['data' => $data]);

    }
}
