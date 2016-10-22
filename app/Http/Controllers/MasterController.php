<?php
/**
 * Created by PhpStorm.
 * User: edwinnnss
 * Date: 10/22/16
 * Time: 06:47
 */

namespace App\Http\Controllers;


use App\Avatar;
use App\Category;
use App\City;
use App\ConsultationType;
use App\District;
use App\Education;
use App\Gender;
use App\Institution;
use App\MaritalStatus;
use App\Occupation;
use App\Province;
use App\Religion;
use App\Village;
use Illuminate\Http\Response;

class MasterController extends Controller {

	private $province;
	private $city;
	private $district;
	private $village;
	private $religion;
	private $education;
	private $maritalStatus;
	private $category;
	private $consultationType;
	private $gender;
	private $institution;
	private $occupation;
	private $avatar;

	public function __construct(
		Province $province,
		City $city,
		District $district,
		Village $village,
		Religion $religion,
		Education $education,
		MaritalStatus $maritalStatus,
		Category $category,
		ConsultationType $consultationType,
		Gender $gender,
		Institution $institution,
		Occupation $occupation,
		Avatar $avatar
	)
	{
		$this->province = $province;
		$this->city = $city;
		$this->district = $district;
		$this->village = $village;
		$this->religion = $religion;
		$this->education = $education;
		$this->maritalStatus = $maritalStatus;
		$this->category = $category;
		$this->consultationType = $consultationType;
		$this->gender = $gender;
		$this->institution = $institution;
		$this->occupation = $occupation;
		$this->avatar = $avatar;
	}

	public function showProvinces()
	{
		$response = $this->province->getProvinces();
		return response()->json([
			self::KEY_DATA => $response
		], Response::HTTP_OK);
	}

	public function showCities($provinceId)
	{
		$response = $this->city->getCities($provinceId);
		return response()->json([
			self::KEY_DATA => $response
		], Response::HTTP_OK);
	}

	public function showDistricts($cityId)
	{
		$response = $this->district->getDistricts($cityId);
		return response()->json([
			self::KEY_DATA => $response
		], Response::HTTP_OK);
	}

	public function showVillages($districtId)
	{
		$response = $this->village->getVillages($districtId);
		return response()->json([
			self::KEY_DATA => $response
		], Response::HTTP_OK);
	}

	public function showReligions()
	{
		$response = $this->religion->getReligions();
		return response()->json([
			self::KEY_DATA => $response
		], Response::HTTP_OK);
	}

	public function showEducations()
	{
		$response = $this->education->getEducations();
		return response()->json([
			self::KEY_DATA => $response
		], Response::HTTP_OK);
	}

	public function showMaritalStatuses()
	{
		$response = $this->maritalStatus->getMaritalStatuses();
		return response()->json([
			self::KEY_DATA => $response
		], Response::HTTP_OK);
	}

	public function showCategories()
	{
		$response = $this->category->getCategories();
		return response()->json([
			self::KEY_DATA => $response
		], Response::HTTP_OK);
	}

	public function showConsultationTypes()
	{
		$response = $this->consultationType->getConsultationTypes();
		return response()->json([
			self::KEY_DATA => $response
		], Response::HTTP_OK);
	}

	public function showGenders()
	{
		$response = $this->gender->getGenders();
		return response()->json([
			self::KEY_DATA => $response
		], Response::HTTP_OK);
	}

	public function showInstitutions()
	{
		$response = $this->institution->getInstitutions();
		return response()->json([
			self::KEY_DATA => $response
		], Response::HTTP_OK);
	}

	public function showOccupations()
	{
		$response = $this->occupation->getOccupations();
		return response()->json([
			self::KEY_DATA => $response
		], Response::HTTP_OK);
	}

	public function showAvatars()
	{
		$response = $this->avatar->getAvatars();
		return response()->json([
			self::KEY_DATA => $response
		], Response::HTTP_OK);
	}
}