# MklEinvoice

**Repository:** [https://github.com/md-mazlan/MklEinvoice](https://github.com/md-mazlan/MklEinvoice)

## 📜 Overview

**MklEinvoice** is a PHP SDK designed to simplify integration with Malaysia's *MyInvois e-Invoicing System* by LHDN. It handles XML invoice generation, document submission, certificate authentication, and status tracking.

---

## 🚀 Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/md-mazlan/MklEinvoice.git
   cd MklEinvoice
   ```

2. **Directory structure:**

   ```
   MklEinvoice/
   ├── App/
   │   └── MklEinvoice/
   │       ├── Model/
   │       │   └── Invoice.php
   │       ├── Platform.php
   │       ├── MyInvoisHelper.php
   │       └── ...
   ├── config/
   ├── submit_document.php
   └── README.md
   ```

---

## 🔐 Certificate Setup

Ensure you have your `.p12` digital certificate from LHDN.

```php
$platform = new Platform('path/to/certificate.p12', 'your_password');
$platform->loginAsTaxPayer($uuid, $user_id);
```

---

## 🧩 Components Breakdown

### 1. `Invoice.php` – XML Invoice Builder

This class builds XML invoices as required by LHDN.

**Sample usage:**

```php
use App\MklEinvoice\Model\Invoice;

$invoice = new Invoice();
$invoice->setSeller($sellerData);
$invoice->setBuyer($buyerData);
$invoice->addItem($item);
$xml = $invoice->toXML();
```

**Common Methods:**

| Method                   | Description              |
| ------------------------ | ------------------------ |
| `setSeller(array $data)` | Sets seller information. |
| `setBuyer(array $data)`  | Sets buyer information.  |
| `addItem(array $item)`   | Adds an invoice item.    |
| `toXML()`                | Returns the invoice XML. |

**Class Details:**

- Accepts structured arrays matching LHDN's schema.
- Supports single and multi-line item configurations.
- Validates mandatory tags like `InvoiceDate`, `InvoiceNumber`, `Seller`, etc.

---

### 2. `Platform.php` – Handles Authentication and API Submission

Handles login, document submission, and interaction with LHDN.

**Key Methods:**

```php
$platform->loginAsTaxPayer($uuid, $user_id);
$platform->submitDocument($type, $uuid, $xml);
$platform->getDocument($uuid);
```

| Method              | Description                                    |
| ------------------- | ---------------------------------------------- |
| `loginAsTaxPayer()` | Authenticates using taxpayer UUID and User ID. |
| `submitDocument()`  | Submits the XML document to MyInvois.          |
| `getDocument()`     | Retrieves the status or response.              |

**Additional Notes:**

- Uses `curl` with SSL certificate authentication.
- Handles both success and error responses from the LHDN API.

---

### 3. `MyInvoisHelper.php` – Utility for Submission

Wraps helper methods for document preparation.

**Example:**

```php
$document = MyInvoisHelper::getSubmitDocument("xml", $id, $xml);
$documents[] = $document;
```

| Method                                  | Description                                          |
| --------------------------------------- | ---------------------------------------------------- |
| `getSubmitDocument($type, $uuid, $xml)` | Returns a structured array formatted for submission. |

---

## 🧪 Example: Full Submission Flow

```php
use App\MklEinvoice\Platform;
use App\MklEinvoice\Model\Invoice;
use App\MklEinvoice\MyInvoisHelper;

$invoice = new Invoice();
$invoice->setSeller([...]);
$invoice->setBuyer([...]);
$invoice->addItem([...]);
$xml = $invoice->toXML();

$platform = new Platform('cert.p12', 'password');
$platform->loginAsTaxPayer('uuid', 'user-id');

$document = MyInvoisHelper::getSubmitDocument("xml", 'uuid', $xml);
$response = $platform->submitDocument("xml", 'uuid', $xml);
```

---

## 📂 Environment Configuration

Create `.env` or config file for:

```env
CERT_PATH=/path/to/cert.p12
CERT_PASS=yourpassword
UUID=your-taxpayer-uuid
USER_ID=your-user-id
```

---

## 📬 API Response Example

**Success:**

```json
{
  "status": "success",
  "uuid": "RJADDYYWD5FFXVZGY64C7VXJ10",
  "timestamp": "2025-06-18T02:46:25Z"
}
```

**Failure:**

```json
{
  "status": "error",
  "message": "Invalid certificate signature."
}
```

---

## 📩 Error Handling

Always handle exceptions when submitting documents:

```php
try {
    $platform->submitDocument("xml", $uuid, $xml);
} catch (Exception $e) {
    echo "Submission failed: " . $e->getMessage();
}
```

---

## 🛠 Architecture Diagram

```text
[YourApp] --> [Invoice Builder (Invoice.php)]
         --> [MyInvoisHelper.php] --> [Platform.php] --> [LHDN API]
```

---

## 📌 To Do / Future Improvements

- Unit test coverage for `Invoice` generation
- Support for JSON payloads
- Logging and better error feedback
- GUI form builder for invoice creation
- CLI tool for developers

---

## 📄 License

MIT License – you are free to use, modify, and distribute.

