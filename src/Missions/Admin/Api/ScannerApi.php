<?php namespace Application\Missions\Admin\Api;

use Application\Missions\Admin\Services\QRService;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;



class ScannerApi extends Api{

    public function __construct(private QRService $qrService)
    {
    }

    #[Route(self::POST, '/processingQRCode')]
    public function processingQR()
    {
        if ($this->data->get('_programType') != 0 && $this->data->get('_qrCode') != "") {
            $code = $this->qrService->checkByHash($this->data->get('_qrCode'));
            if ($code) {
                $result = $this->qrService->createAccessQRCode($this->data->all());
                return array(
                    'statusCode' => 200,
                    'qrcode' => $result->qrcode,
                    'name' => $code);
            } else {
                return array(
                    'statusCode' => 422,
                    'message' => 'Nem található ilyen vonalkód!'
                );
            }
        } else {
            return array(
                'statusCode' => 422,
                'message' => 'Mezők kitöltése kötelező!'
            );
        }
    }
}
