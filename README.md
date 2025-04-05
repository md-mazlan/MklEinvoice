# MklEinvoice PHP SDK

**MklEinvoice** is a PHP SDK for integrating with Malaysia's MyInvois electronic invoicing platform. It provides tools to:

- Authenticate as a taxpayer or intermediary
- Submit e-invoice documents
- Validate taxpayer TINs
- Filter/search submissions

---

## 📦 Installation

Clone or download this repository into your PHP project:

```bash
git clone https://github.com/yourusername/MklEinvoice.git
```

Add the `App\MklEinvoice` namespace path to your autoloader, or manually require the files if needed.

---

## ⚙️ Setup

### Environment Configuration

Use the `Platform` class to switch between sandbox and production:

```php
use App\MklEinvoice\Platform;

$platform = new Platform(false); // false = sandbox, true = production
```

---

## 🔐 Authentication

### Login as Taxpayer

```php
$platform->loginAsTaxPayer('<client_id>', '<client_secret>');
```

### Login as Intermediary

```php
$platform->loginAsIntermediary('<client_id>', '<client_secret>', '<onbehalfof>');
```

### Get Token or Error

```php
$token = $platform->getToken(); // internal use
$error = $platform->getLoginError();
```

---

## 📤 Einvoicing Operations

### Initialize

```php
use App\MklEinvoice\Einvoicing;

$einvoicing = new Einvoicing($platform);
```

### Validate Taxpayer TIN

```php
$response = $einvoicing->validateTaxPayerTin(
    'TIN_NUMBER',
    'NRIC',              // or PASSPORT, BUSINESS_REGISTRATION
    'NRIC_OR_DOC_ID'
);
```

### Submit Documents

```php
use App\MklEinvoice\MyInvoisHelper;

// Generate $xml using Invoice class
use App\MklEinvoice\Model\Invoice;

$invoice = new Invoice();
// Fill in invoice details here...
$xml = $invoice->toXML(); // or the appropriate method to convert to XML

// Build each document using MyInvoisHelper
$documents = [];
$document = MyInvoisHelper::getSubmitDocument("xml", $id, $xml);
$documents[] = $document;

$response = $einvoicing->submitDocuments($documents);
```

---



## 🔍 Search & Filter

Use the `SearchFilter` class to build search queries for invoice status, date, direction, etc.

```php
use App\MklEinvoice\SearchFilter;

$filter = new SearchFilter();
$filter->pageNo = 1;
$filter->pageSize = 50;
$filter->submissionDateFrom = "2024-01-01";
$filter->submissionDateTo = "2024-12-31";

$queryString = $filter->getParamString();
// ?pageNo=1&pageSize=50&submissionDateFrom=2024-01-01&...
```

---

## 🧾 Class Reference

### Platform

| Method | Description |
|--------|-------------|
| `__construct(bool $isProduction)` | Set environment |
| `loginAsTaxPayer(string $clientId, string $clientSecret): bool` | Authenticate taxpayer |
| `loginAsIntermediary(string $clientId, string $clientSecret, string $onbehalfof): bool` | Authenticate intermediary |
| `getLoginError(): string` | Return last error message |

---

### Einvoicing

| Method | Description |
|--------|-------------|
| `validateTaxPayerTin(string $tin, string $idType, string $id): array` | Validate taxpayer TIN |
| `submitDocuments(array $documents): array` | Submit invoices |

---

-----|-------------|
| `__construct(Invoice $invoice, string $p12FilePath, string $issuerName, string $serial)` | Set up for signing |
| `genDocDigest()` | Create SHA-256 digest of invoice XML |
| `signDocument()` | Digitally sign the document using `.p12` |

---

### SearchFilter

| Property | Description |
|----------|-------------|
| `pageNo`, `pageSize` | Pagination controls |
| `submissionDateFrom`, `submissionDateTo` | Filter by submission date |
| `issueDateFrom`, `issueDateTo` | Filter by invoice issue date |
| `direction`, `status`, `documentType` | Additional filters |
| `receiverId`, `receiverTin`, `issuerTin`, etc. | Entity-based filters |

| Method | Description |
|--------|-------------|
| `getParamString(): string` | Build query string from parameters |

---

## 📝 License

MIT License. See [LICENSE](LICENSE) for more info.

---

## 📫 Support / Contribute

Feel free to open issues or pull requests for improvements and bug fixes.