<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function aimAndmission(){
        return view('AimNMission');
    }
    public function FacultyTeam(){
        return view('FacultyTeam');
    }
    public function BOG()
    {
        return view('BOG');
    }
    public function legal_advisor(){
        return view('legalAdvisor');
    }
    public function about_sdc(){
        return view ('about_sdc');
    }
    public function about_ttpc(){
        return view ('TTPC');
    }
    public function legal_status_iisciences()
    {
        return view ('legal_status');
    }
    public function ropd()
    {
        return view ('ropd');
    }
    public function coordinator_form()
    {
        return view ('coordinatorForm');
    }
    public function FBF()
    {
        return view('fbf');
    }
    public function apl()
    {
        return view ('apl');
    }
    public function dl_procon()
    {
        return view ('dlpc');
    }
    public function ebe(){
        return view ('ebe');
    }
    public function fies()
    {
        return view ('fies');
    }
    public function priorityAward(){
        return view ('priorityAward');
    }
    public function ropl(){
        return view('ropl');
    }
    public function regularesys()
    {
        return view('regularesys');
    }
    public function examination(){
        return view('examination');
    }
    public function generalInfo(){
        return view('generalInfo');
    }
    public function Online_verify(){
        return view('Online_verify');
    }
    public function ad_forms()
    {
        return view('ad_forms');
    }
    public function Threemnth()
    {
        return view('Threemnth');
    }
    public function Sixmnth()
    {
        return view('Sixmnth');
    }
    public function OneYear(){
        return view('OneYear');
    }
    public function TwoYear(){
        return view('TwoYear');
    }
    public function DegreeProg(){
        return view('DegreeProg');
    }
    public function document_requird(){
        return view('document_requird');
    }
    public function FeeStructure()
    {
      return view('FeeStructure');
    }
    public function headOffice(){
      return view('headOffice');
    }
    public function BusinessFrenchise_Pak()
    {
      return view ('BusinessFrenchise_Pak');
    }
    public function BusinessFrenchise_overSea()
    {
      return view('BusinessFrenchise_overSea');
    }
    public function Coordinator_pak()
    {
      return view('Coordinator_pak');
    }
    public function Coordinator_OverSea(){
      return view('Coordinator_OverSea');
    }
    public function gallery()
    {
      return view('gallery');
    }
    public function affiliation()
    {
      return view('affiliation');
    }
    public function chairmen()
    {
      return view('chairmen');
    }

    public function director_Monitoring()
    {
      return view('director_Monitoring');
    }

    public function director_finance()
    {
      return view('director_finance');
    }

    public function director_programs()
    {
      return view('director_programs');
    }
}
