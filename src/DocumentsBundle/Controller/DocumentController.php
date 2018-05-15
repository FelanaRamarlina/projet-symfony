<?php

namespace DocumentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DocumentsBundle\Entity\Document;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Response;

class DocumentController extends Controller
{
    public function indexAction($message = null) {
    // Construction de la liste des documents d'un candidat vue par un candidat
    }

    public function indexCandidatAction($message = null) {
//
    }

    public function indexConseillerAction($message = null) {
// Construction de la liste des documents d'un candidat vue par un conseiller
    }

    public function downloadAction($filename) {
    }

    public function downloadConseillerAction($candidat_id, $filename) {
		}

    public function uploadAction($document_id) {
    }

    public function validateAction($candidat_id, $document_id) {
    }

    public function restoreAction($candidat_id, $document_id) {
    }

    private function getUserDocuments($candidat_id = null) {
    }

    private function createUserDocuments() {
    }
}
