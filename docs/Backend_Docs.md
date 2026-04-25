# Dokumentasi Backend (FULL Source)

_Dihasilkan otomatis: 2026-04-25 14:19:52_  
**Root:** `G:\.galuh\latihanlaravel\A-Portfolio-Project\2026\alibaba\backend`

## Daftar Isi
- [Controllers (app/Http/Controllers)](#controllers-app-http-controllers)
  - [app\Http\Controllers\Api\AuthController.php](#file-apphttpcontrollersapiauthcontrollerphp)
  - [app\Http\Controllers\Api\CashierShiftController.php](#file-apphttpcontrollersapicashiershiftcontrollerphp)
  - [app\Http\Controllers\Api\CashMovementController.php](#file-apphttpcontrollersapicashmovementcontrollerphp)
  - [app\Http\Controllers\Api\CourierController.php](#file-apphttpcontrollersapicouriercontrollerphp)
  - [app\Http\Controllers\Api\CustomerController.php](#file-apphttpcontrollersapicustomercontrollerphp)
  - [app\Http\Controllers\Api\DeliveryController.php](#file-apphttpcontrollersapideliverycontrollerphp)
  - [app\Http\Controllers\Api\ExpenseCategoryController.php](#file-apphttpcontrollersapiexpensecategorycontrollerphp)
  - [app\Http\Controllers\Api\ExpenseController.php](#file-apphttpcontrollersapiexpensecontrollerphp)
  - [app\Http\Controllers\Api\GoodsReceiptController.php](#file-apphttpcontrollersapigoodsreceiptcontrollerphp)
  - [app\Http\Controllers\Api\KitchenTicketController.php](#file-apphttpcontrollersapikitchenticketcontrollerphp)
  - [app\Http\Controllers\Api\OrderController.php](#file-apphttpcontrollersapiordercontrollerphp)
  - [app\Http\Controllers\Api\OutletController.php](#file-apphttpcontrollersapioutletcontrollerphp)
  - [app\Http\Controllers\Api\OutletMaterialStockController.php](#file-apphttpcontrollersapioutletmaterialstockcontrollerphp)
  - [app\Http\Controllers\Api\OutletSettingController.php](#file-apphttpcontrollersapioutletsettingcontrollerphp)
  - [app\Http\Controllers\Api\PaymentController.php](#file-apphttpcontrollersapipaymentcontrollerphp)
  - [app\Http\Controllers\Api\PaymentMethodController.php](#file-apphttpcontrollersapipaymentmethodcontrollerphp)
  - [app\Http\Controllers\Api\PermissionController.php](#file-apphttpcontrollersapipermissioncontrollerphp)
  - [app\Http\Controllers\Api\ProductBomController.php](#file-apphttpcontrollersapiproductbomcontrollerphp)
  - [app\Http\Controllers\Api\ProductCategoryController.php](#file-apphttpcontrollersapiproductcategorycontrollerphp)
  - [app\Http\Controllers\Api\ProductController.php](#file-apphttpcontrollersapiproductcontrollerphp)
  - [app\Http\Controllers\Api\PromotionController.php](#file-apphttpcontrollersapipromotioncontrollerphp)
  - [app\Http\Controllers\Api\PurchaseOrderController.php](#file-apphttpcontrollersapipurchaseordercontrollerphp)
  - [app\Http\Controllers\Api\RawMaterialCategoryController.php](#file-apphttpcontrollersapirawmaterialcategorycontrollerphp)
  - [app\Http\Controllers\Api\RawMaterialController.php](#file-apphttpcontrollersapirawmaterialcontrollerphp)
  - [app\Http\Controllers\Api\ReportController.php](#file-apphttpcontrollersapireportcontrollerphp)
  - [app\Http\Controllers\Api\RoleController.php](#file-apphttpcontrollersapirolecontrollerphp)
  - [app\Http\Controllers\Api\StockAdjustmentController.php](#file-apphttpcontrollersapistockadjustmentcontrollerphp)
  - [app\Http\Controllers\Api\StockMovementController.php](#file-apphttpcontrollersapistockmovementcontrollerphp)
  - [app\Http\Controllers\Api\StockOpnameController.php](#file-apphttpcontrollersapistockopnamecontrollerphp)
  - [app\Http\Controllers\Api\StockTransferController.php](#file-apphttpcontrollersapistocktransfercontrollerphp)
  - [app\Http\Controllers\Api\SupplierController.php](#file-apphttpcontrollersapisuppliercontrollerphp)
  - [app\Http\Controllers\Api\SystemSettingController.php](#file-apphttpcontrollersapisystemsettingcontrollerphp)
  - [app\Http\Controllers\Api\UnitController.php](#file-apphttpcontrollersapiunitcontrollerphp)
  - [app\Http\Controllers\Api\UnitConversionController.php](#file-apphttpcontrollersapiunitconversioncontrollerphp)
  - [app\Http\Controllers\Api\UserController.php](#file-apphttpcontrollersapiusercontrollerphp)
  - [app\Http\Controllers\Api\VoucherController.php](#file-apphttpcontrollersapivouchercontrollerphp)
  - [app\Http\Controllers\Auth\AuthenticatedSessionController.php](#file-apphttpcontrollersauthauthenticatedsessioncontrollerphp)
  - [app\Http\Controllers\Auth\EmailVerificationNotificationController.php](#file-apphttpcontrollersauthemailverificationnotificationcontrollerphp)
  - [app\Http\Controllers\Auth\NewPasswordController.php](#file-apphttpcontrollersauthnewpasswordcontrollerphp)
  - [app\Http\Controllers\Auth\PasswordResetLinkController.php](#file-apphttpcontrollersauthpasswordresetlinkcontrollerphp)
  - [app\Http\Controllers\Auth\RegisteredUserController.php](#file-apphttpcontrollersauthregisteredusercontrollerphp)
  - [app\Http\Controllers\Auth\VerifyEmailController.php](#file-apphttpcontrollersauthverifyemailcontrollerphp)
  - [app\Http\Controllers\Controller.php](#file-apphttpcontrollerscontrollerphp)
- [Form Requests (app/Http/Requests)](#form-requests-app-http-requests)
  - [app\Http\Requests\Api\Auth\ChangePasswordRequest.php](#file-apphttprequestsapiauthchangepasswordrequestphp)
  - [app\Http\Requests\Api\Auth\LoginRequest.php](#file-apphttprequestsapiauthloginrequestphp)
  - [app\Http\Requests\Api\CashierShift\CloseCashierShiftRequest.php](#file-apphttprequestsapicashiershiftclosecashiershiftrequestphp)
  - [app\Http\Requests\Api\CashierShift\StoreCashierShiftRequest.php](#file-apphttprequestsapicashiershiftstorecashiershiftrequestphp)
  - [app\Http\Requests\Api\CashierShift\UpdateCashierShiftRequest.php](#file-apphttprequestsapicashiershiftupdatecashiershiftrequestphp)
  - [app\Http\Requests\Api\CashMovement\StoreCashMovementRequest.php](#file-apphttprequestsapicashmovementstorecashmovementrequestphp)
  - [app\Http\Requests\Api\Courier\StoreCourierRequest.php](#file-apphttprequestsapicourierstorecourierrequestphp)
  - [app\Http\Requests\Api\Courier\UpdateCourierRequest.php](#file-apphttprequestsapicourierupdatecourierrequestphp)
  - [app\Http\Requests\Api\Customer\StoreCustomerRequest.php](#file-apphttprequestsapicustomerstorecustomerrequestphp)
  - [app\Http\Requests\Api\Customer\UpdateCustomerRequest.php](#file-apphttprequestsapicustomerupdatecustomerrequestphp)
  - [app\Http\Requests\Api\Delivery\AssignCourierRequest.php](#file-apphttprequestsapideliveryassigncourierrequestphp)
  - [app\Http\Requests\Api\Delivery\StoreDeliveryRequest.php](#file-apphttprequestsapideliverystoredeliveryrequestphp)
  - [app\Http\Requests\Api\Delivery\UpdateDeliveryRequest.php](#file-apphttprequestsapideliveryupdatedeliveryrequestphp)
  - [app\Http\Requests\Api\Delivery\UpdateDeliveryStatusRequest.php](#file-apphttprequestsapideliveryupdatedeliverystatusrequestphp)
  - [app\Http\Requests\Api\Expense\ApproveExpenseRequest.php](#file-apphttprequestsapiexpenseapproveexpenserequestphp)
  - [app\Http\Requests\Api\Expense\RejectExpenseRequest.php](#file-apphttprequestsapiexpenserejectexpenserequestphp)
  - [app\Http\Requests\Api\Expense\StoreExpenseRequest.php](#file-apphttprequestsapiexpensestoreexpenserequestphp)
  - [app\Http\Requests\Api\Expense\UpdateExpenseRequest.php](#file-apphttprequestsapiexpenseupdateexpenserequestphp)
  - [app\Http\Requests\Api\Expense\UploadExpenseAttachmentRequest.php](#file-apphttprequestsapiexpenseuploadexpenseattachmentrequestphp)
  - [app\Http\Requests\Api\ExpenseCategory\StoreExpenseCategoryRequest.php](#file-apphttprequestsapiexpensecategorystoreexpensecategoryrequestphp)
  - [app\Http\Requests\Api\ExpenseCategory\UpdateExpenseCategoryRequest.php](#file-apphttprequestsapiexpensecategoryupdateexpensecategoryrequestphp)
  - [app\Http\Requests\Api\Inventory\OutletMaterialStock\UpsertOutletMaterialStockRequest.php](#file-apphttprequestsapiinventoryoutletmaterialstockupsertoutletmaterialstockrequestphp)
  - [app\Http\Requests\Api\Inventory\ProductBom\StoreProductBomRequest.php](#file-apphttprequestsapiinventoryproductbomstoreproductbomrequestphp)
  - [app\Http\Requests\Api\Inventory\ProductBom\UpdateProductBomRequest.php](#file-apphttprequestsapiinventoryproductbomupdateproductbomrequestphp)
  - [app\Http\Requests\Api\Inventory\RawMaterial\StoreRawMaterialRequest.php](#file-apphttprequestsapiinventoryrawmaterialstorerawmaterialrequestphp)
  - [app\Http\Requests\Api\Inventory\RawMaterial\UpdateRawMaterialRequest.php](#file-apphttprequestsapiinventoryrawmaterialupdaterawmaterialrequestphp)
  - [app\Http\Requests\Api\Inventory\RawMaterialCategory\StoreRawMaterialCategoryRequest.php](#file-apphttprequestsapiinventoryrawmaterialcategorystorerawmaterialcategoryrequestphp)
  - [app\Http\Requests\Api\Inventory\RawMaterialCategory\UpdateRawMaterialCategoryRequest.php](#file-apphttprequestsapiinventoryrawmaterialcategoryupdaterawmaterialcategoryrequestphp)
  - [app\Http\Requests\Api\Inventory\StockAdjustment\StoreStockAdjustmentRequest.php](#file-apphttprequestsapiinventorystockadjustmentstorestockadjustmentrequestphp)
  - [app\Http\Requests\Api\Inventory\StockAdjustment\UpdateStockAdjustmentRequest.php](#file-apphttprequestsapiinventorystockadjustmentupdatestockadjustmentrequestphp)
  - [app\Http\Requests\Api\Inventory\StockOpname\PostStockOpnameRequest.php](#file-apphttprequestsapiinventorystockopnamepoststockopnamerequestphp)
  - [app\Http\Requests\Api\Inventory\StockOpname\StoreStockOpnameRequest.php](#file-apphttprequestsapiinventorystockopnamestorestockopnamerequestphp)
  - [app\Http\Requests\Api\Inventory\StockOpname\UpdateStockOpnameRequest.php](#file-apphttprequestsapiinventorystockopnameupdatestockopnamerequestphp)
  - [app\Http\Requests\Api\Inventory\StockTransfer\ReceiveStockTransferRequest.php](#file-apphttprequestsapiinventorystocktransferreceivestocktransferrequestphp)
  - [app\Http\Requests\Api\Inventory\StockTransfer\SendStockTransferRequest.php](#file-apphttprequestsapiinventorystocktransfersendstocktransferrequestphp)
  - [app\Http\Requests\Api\Inventory\StockTransfer\StoreStockTransferRequest.php](#file-apphttprequestsapiinventorystocktransferstorestocktransferrequestphp)
  - [app\Http\Requests\Api\Inventory\StockTransfer\UpdateStockTransferRequest.php](#file-apphttprequestsapiinventorystocktransferupdatestocktransferrequestphp)
  - [app\Http\Requests\Api\Inventory\Unit\StoreUnitRequest.php](#file-apphttprequestsapiinventoryunitstoreunitrequestphp)
  - [app\Http\Requests\Api\Inventory\Unit\UpdateUnitRequest.php](#file-apphttprequestsapiinventoryunitupdateunitrequestphp)
  - [app\Http\Requests\Api\Inventory\UnitConversion\StoreUnitConversionRequest.php](#file-apphttprequestsapiinventoryunitconversionstoreunitconversionrequestphp)
  - [app\Http\Requests\Api\Inventory\UnitConversion\UpdateUnitConversionRequest.php](#file-apphttprequestsapiinventoryunitconversionupdateunitconversionrequestphp)
  - [app\Http\Requests\Api\Kitchen\CancelKitchenTicketRequest.php](#file-apphttprequestsapikitchencancelkitchenticketrequestphp)
  - [app\Http\Requests\Api\Kitchen\PrintKitchenTicketRequest.php](#file-apphttprequestsapikitchenprintkitchenticketrequestphp)
  - [app\Http\Requests\Api\Kitchen\ReadyKitchenTicketRequest.php](#file-apphttprequestsapikitchenreadykitchenticketrequestphp)
  - [app\Http\Requests\Api\Kitchen\ServeKitchenTicketRequest.php](#file-apphttprequestsapikitchenservekitchenticketrequestphp)
  - [app\Http\Requests\Api\Kitchen\StartPreparingKitchenTicketRequest.php](#file-apphttprequestsapikitchenstartpreparingkitchenticketrequestphp)
  - [app\Http\Requests\Api\Kitchen\StoreKitchenTicketRequest.php](#file-apphttprequestsapikitchenstorekitchenticketrequestphp)
  - [app\Http\Requests\Api\Order\StoreOrderRequest.php](#file-apphttprequestsapiorderstoreorderrequestphp)
  - [app\Http\Requests\Api\Order\UpdateOrderRequest.php](#file-apphttprequestsapiorderupdateorderrequestphp)
  - [app\Http\Requests\Api\Outlet\StoreOutletRequest.php](#file-apphttprequestsapioutletstoreoutletrequestphp)
  - [app\Http\Requests\Api\Outlet\UpdateOutletRequest.php](#file-apphttprequestsapioutletupdateoutletrequestphp)
  - [app\Http\Requests\Api\Outlet\UpdateOutletSettingRequest.php](#file-apphttprequestsapioutletupdateoutletsettingrequestphp)
  - [app\Http\Requests\Api\Payment\CancelPaymentRequest.php](#file-apphttprequestsapipaymentcancelpaymentrequestphp)
  - [app\Http\Requests\Api\Payment\StorePaymentRequest.php](#file-apphttprequestsapipaymentstorepaymentrequestphp)
  - [app\Http\Requests\Api\PaymentMethod\StorePaymentMethodRequest.php](#file-apphttprequestsapipaymentmethodstorepaymentmethodrequestphp)
  - [app\Http\Requests\Api\PaymentMethod\UpdatePaymentMethodRequest.php](#file-apphttprequestsapipaymentmethodupdatepaymentmethodrequestphp)
  - [app\Http\Requests\Api\Permission\StorePermissionRequest.php](#file-apphttprequestsapipermissionstorepermissionrequestphp)
  - [app\Http\Requests\Api\Permission\UpdatePermissionRequest.php](#file-apphttprequestsapipermissionupdatepermissionrequestphp)
  - [app\Http\Requests\Api\Product\StoreProductRequest.php](#file-apphttprequestsapiproductstoreproductrequestphp)
  - [app\Http\Requests\Api\Product\UpdateProductRequest.php](#file-apphttprequestsapiproductupdateproductrequestphp)
  - [app\Http\Requests\Api\ProductCategory\StoreProductCategoryRequest.php](#file-apphttprequestsapiproductcategorystoreproductcategoryrequestphp)
  - [app\Http\Requests\Api\ProductCategory\UpdateProductCategoryRequest.php](#file-apphttprequestsapiproductcategoryupdateproductcategoryrequestphp)
  - [app\Http\Requests\Api\Promotion\StorePromotionRequest.php](#file-apphttprequestsapipromotionstorepromotionrequestphp)
  - [app\Http\Requests\Api\Promotion\UpdatePromotionRequest.php](#file-apphttprequestsapipromotionupdatepromotionrequestphp)
  - [app\Http\Requests\Api\Purchasing\GoodsReceipt\PostGoodsReceiptRequest.php](#file-apphttprequestsapipurchasinggoodsreceiptpostgoodsreceiptrequestphp)
  - [app\Http\Requests\Api\Purchasing\GoodsReceipt\StoreGoodsReceiptRequest.php](#file-apphttprequestsapipurchasinggoodsreceiptstoregoodsreceiptrequestphp)
  - [app\Http\Requests\Api\Purchasing\GoodsReceipt\UpdateGoodsReceiptRequest.php](#file-apphttprequestsapipurchasinggoodsreceiptupdategoodsreceiptrequestphp)
  - [app\Http\Requests\Api\Purchasing\PurchaseOrder\StorePurchaseOrderRequest.php](#file-apphttprequestsapipurchasingpurchaseorderstorepurchaseorderrequestphp)
  - [app\Http\Requests\Api\Purchasing\PurchaseOrder\UpdatePurchaseOrderRequest.php](#file-apphttprequestsapipurchasingpurchaseorderupdatepurchaseorderrequestphp)
  - [app\Http\Requests\Api\Purchasing\Supplier\StoreSupplierRequest.php](#file-apphttprequestsapipurchasingsupplierstoresupplierrequestphp)
  - [app\Http\Requests\Api\Purchasing\Supplier\UpdateSupplierRequest.php](#file-apphttprequestsapipurchasingsupplierupdatesupplierrequestphp)
  - [app\Http\Requests\Api\Report\ReportFilterRequest.php](#file-apphttprequestsapireportreportfilterrequestphp)
  - [app\Http\Requests\Api\Role\StoreRoleRequest.php](#file-apphttprequestsapirolestorerolerequestphp)
  - [app\Http\Requests\Api\Role\UpdateRoleRequest.php](#file-apphttprequestsapiroleupdaterolerequestphp)
  - [app\Http\Requests\Api\SystemSetting\UpsertSystemSettingRequest.php](#file-apphttprequestsapisystemsettingupsertsystemsettingrequestphp)
  - [app\Http\Requests\Api\User\StoreUserRequest.php](#file-apphttprequestsapiuserstoreuserrequestphp)
  - [app\Http\Requests\Api\User\UpdateUserRequest.php](#file-apphttprequestsapiuserupdateuserrequestphp)
  - [app\Http\Requests\Api\Voucher\StoreVoucherRequest.php](#file-apphttprequestsapivoucherstorevoucherrequestphp)
  - [app\Http\Requests\Api\Voucher\UpdateVoucherRequest.php](#file-apphttprequestsapivoucherupdatevoucherrequestphp)
- [API Resources (app/Http/Resources)](#api-resources-app-http-resources)
  - [app\Http\Resources\CashierShiftResource.php](#file-apphttpresourcescashiershiftresourcephp)
  - [app\Http\Resources\CashMovementResource.php](#file-apphttpresourcescashmovementresourcephp)
  - [app\Http\Resources\CourierResource.php](#file-apphttpresourcescourierresourcephp)
  - [app\Http\Resources\CustomerAddressResource.php](#file-apphttpresourcescustomeraddressresourcephp)
  - [app\Http\Resources\CustomerResource.php](#file-apphttpresourcescustomerresourcephp)
  - [app\Http\Resources\DeliveryResource.php](#file-apphttpresourcesdeliveryresourcephp)
  - [app\Http\Resources\ExpenseAttachmentResource.php](#file-apphttpresourcesexpenseattachmentresourcephp)
  - [app\Http\Resources\ExpenseCategoryResource.php](#file-apphttpresourcesexpensecategoryresourcephp)
  - [app\Http\Resources\ExpenseResource.php](#file-apphttpresourcesexpenseresourcephp)
  - [app\Http\Resources\GoodsReceiptItemResource.php](#file-apphttpresourcesgoodsreceiptitemresourcephp)
  - [app\Http\Resources\GoodsReceiptResource.php](#file-apphttpresourcesgoodsreceiptresourcephp)
  - [app\Http\Resources\KitchenTicketItemResource.php](#file-apphttpresourceskitchenticketitemresourcephp)
  - [app\Http\Resources\KitchenTicketResource.php](#file-apphttpresourceskitchenticketresourcephp)
  - [app\Http\Resources\OrderItemModifierResource.php](#file-apphttpresourcesorderitemmodifierresourcephp)
  - [app\Http\Resources\OrderItemResource.php](#file-apphttpresourcesorderitemresourcephp)
  - [app\Http\Resources\OrderItemVariantResource.php](#file-apphttpresourcesorderitemvariantresourcephp)
  - [app\Http\Resources\OrderResource.php](#file-apphttpresourcesorderresourcephp)
  - [app\Http\Resources\OutletMaterialStockResource.php](#file-apphttpresourcesoutletmaterialstockresourcephp)
  - [app\Http\Resources\OutletResource.php](#file-apphttpresourcesoutletresourcephp)
  - [app\Http\Resources\OutletSettingResource.php](#file-apphttpresourcesoutletsettingresourcephp)
  - [app\Http\Resources\PaymentMethodResource.php](#file-apphttpresourcespaymentmethodresourcephp)
  - [app\Http\Resources\PaymentResource.php](#file-apphttpresourcespaymentresourcephp)
  - [app\Http\Resources\PermissionResource.php](#file-apphttpresourcespermissionresourcephp)
  - [app\Http\Resources\ProductBomItemResource.php](#file-apphttpresourcesproductbomitemresourcephp)
  - [app\Http\Resources\ProductBomResource.php](#file-apphttpresourcesproductbomresourcephp)
  - [app\Http\Resources\ProductBundleItemResource.php](#file-apphttpresourcesproductbundleitemresourcephp)
  - [app\Http\Resources\ProductCategoryResource.php](#file-apphttpresourcesproductcategoryresourcephp)
  - [app\Http\Resources\ProductModifierGroupResource.php](#file-apphttpresourcesproductmodifiergroupresourcephp)
  - [app\Http\Resources\ProductModifierOptionResource.php](#file-apphttpresourcesproductmodifieroptionresourcephp)
  - [app\Http\Resources\ProductOutletStatusResource.php](#file-apphttpresourcesproductoutletstatusresourcephp)
  - [app\Http\Resources\ProductPriceResource.php](#file-apphttpresourcesproductpriceresourcephp)
  - [app\Http\Resources\ProductResource.php](#file-apphttpresourcesproductresourcephp)
  - [app\Http\Resources\ProductVariantGroupResource.php](#file-apphttpresourcesproductvariantgroupresourcephp)
  - [app\Http\Resources\ProductVariantOptionResource.php](#file-apphttpresourcesproductvariantoptionresourcephp)
  - [app\Http\Resources\PromotionResource.php](#file-apphttpresourcespromotionresourcephp)
  - [app\Http\Resources\PromotionRuleResource.php](#file-apphttpresourcespromotionruleresourcephp)
  - [app\Http\Resources\PurchaseOrderItemResource.php](#file-apphttpresourcespurchaseorderitemresourcephp)
  - [app\Http\Resources\PurchaseOrderResource.php](#file-apphttpresourcespurchaseorderresourcephp)
  - [app\Http\Resources\RawMaterialCategoryResource.php](#file-apphttpresourcesrawmaterialcategoryresourcephp)
  - [app\Http\Resources\RawMaterialResource.php](#file-apphttpresourcesrawmaterialresourcephp)
  - [app\Http\Resources\RoleResource.php](#file-apphttpresourcesroleresourcephp)
  - [app\Http\Resources\StockAdjustmentItemResource.php](#file-apphttpresourcesstockadjustmentitemresourcephp)
  - [app\Http\Resources\StockAdjustmentResource.php](#file-apphttpresourcesstockadjustmentresourcephp)
  - [app\Http\Resources\StockMovementItemResource.php](#file-apphttpresourcesstockmovementitemresourcephp)
  - [app\Http\Resources\StockMovementResource.php](#file-apphttpresourcesstockmovementresourcephp)
  - [app\Http\Resources\StockOpnameItemResource.php](#file-apphttpresourcesstockopnameitemresourcephp)
  - [app\Http\Resources\StockOpnameResource.php](#file-apphttpresourcesstockopnameresourcephp)
  - [app\Http\Resources\StockTransferItemResource.php](#file-apphttpresourcesstocktransferitemresourcephp)
  - [app\Http\Resources\StockTransferResource.php](#file-apphttpresourcesstocktransferresourcephp)
  - [app\Http\Resources\SupplierResource.php](#file-apphttpresourcessupplierresourcephp)
  - [app\Http\Resources\SystemSettingResource.php](#file-apphttpresourcessystemsettingresourcephp)
  - [app\Http\Resources\UnitConversionResource.php](#file-apphttpresourcesunitconversionresourcephp)
  - [app\Http\Resources\UnitResource.php](#file-apphttpresourcesunitresourcephp)
  - [app\Http\Resources\UserResource.php](#file-apphttpresourcesuserresourcephp)
  - [app\Http\Resources\VoucherResource.php](#file-apphttpresourcesvoucherresourcephp)
- [Models (app/Models)](#models-app-models)
  - [app\Models\CashierShift.php](#file-appmodelscashiershiftphp)
  - [app\Models\CashMovement.php](#file-appmodelscashmovementphp)
  - [app\Models\Courier.php](#file-appmodelscourierphp)
  - [app\Models\Customer.php](#file-appmodelscustomerphp)
  - [app\Models\CustomerAddress.php](#file-appmodelscustomeraddressphp)
  - [app\Models\Delivery.php](#file-appmodelsdeliveryphp)
  - [app\Models\Expense.php](#file-appmodelsexpensephp)
  - [app\Models\ExpenseAttachment.php](#file-appmodelsexpenseattachmentphp)
  - [app\Models\ExpenseCategory.php](#file-appmodelsexpensecategoryphp)
  - [app\Models\GoodsReceipt.php](#file-appmodelsgoodsreceiptphp)
  - [app\Models\GoodsReceiptItem.php](#file-appmodelsgoodsreceiptitemphp)
  - [app\Models\KitchenTicket.php](#file-appmodelskitchenticketphp)
  - [app\Models\KitchenTicketItem.php](#file-appmodelskitchenticketitemphp)
  - [app\Models\Order.php](#file-appmodelsorderphp)
  - [app\Models\OrderItem.php](#file-appmodelsorderitemphp)
  - [app\Models\OrderItemModifier.php](#file-appmodelsorderitemmodifierphp)
  - [app\Models\OrderItemVariant.php](#file-appmodelsorderitemvariantphp)
  - [app\Models\OrderStatusHistory.php](#file-appmodelsorderstatushistoryphp)
  - [app\Models\Outlet.php](#file-appmodelsoutletphp)
  - [app\Models\OutletMaterialStock.php](#file-appmodelsoutletmaterialstockphp)
  - [app\Models\OutletSetting.php](#file-appmodelsoutletsettingphp)
  - [app\Models\Payment.php](#file-appmodelspaymentphp)
  - [app\Models\PaymentMethod.php](#file-appmodelspaymentmethodphp)
  - [app\Models\Product.php](#file-appmodelsproductphp)
  - [app\Models\ProductBom.php](#file-appmodelsproductbomphp)
  - [app\Models\ProductBomItem.php](#file-appmodelsproductbomitemphp)
  - [app\Models\ProductBundleItem.php](#file-appmodelsproductbundleitemphp)
  - [app\Models\ProductCategory.php](#file-appmodelsproductcategoryphp)
  - [app\Models\ProductModifierGroup.php](#file-appmodelsproductmodifiergroupphp)
  - [app\Models\ProductModifierOption.php](#file-appmodelsproductmodifieroptionphp)
  - [app\Models\ProductOutletStatus.php](#file-appmodelsproductoutletstatusphp)
  - [app\Models\ProductPrice.php](#file-appmodelsproductpricephp)
  - [app\Models\ProductVariantGroup.php](#file-appmodelsproductvariantgroupphp)
  - [app\Models\ProductVariantOption.php](#file-appmodelsproductvariantoptionphp)
  - [app\Models\Promotion.php](#file-appmodelspromotionphp)
  - [app\Models\PromotionRule.php](#file-appmodelspromotionrulephp)
  - [app\Models\PurchaseOrder.php](#file-appmodelspurchaseorderphp)
  - [app\Models\PurchaseOrderItem.php](#file-appmodelspurchaseorderitemphp)
  - [app\Models\RawMaterial.php](#file-appmodelsrawmaterialphp)
  - [app\Models\RawMaterialCategory.php](#file-appmodelsrawmaterialcategoryphp)
  - [app\Models\StockAdjustment.php](#file-appmodelsstockadjustmentphp)
  - [app\Models\StockAdjustmentItem.php](#file-appmodelsstockadjustmentitemphp)
  - [app\Models\StockMovement.php](#file-appmodelsstockmovementphp)
  - [app\Models\StockMovementItem.php](#file-appmodelsstockmovementitemphp)
  - [app\Models\StockOpname.php](#file-appmodelsstockopnamephp)
  - [app\Models\StockOpnameItem.php](#file-appmodelsstockopnameitemphp)
  - [app\Models\StockTransfer.php](#file-appmodelsstocktransferphp)
  - [app\Models\StockTransferItem.php](#file-appmodelsstocktransferitemphp)
  - [app\Models\Supplier.php](#file-appmodelssupplierphp)
  - [app\Models\SystemSetting.php](#file-appmodelssystemsettingphp)
  - [app\Models\Unit.php](#file-appmodelsunitphp)
  - [app\Models\UnitConversion.php](#file-appmodelsunitconversionphp)
  - [app\Models\User.php](#file-appmodelsuserphp)
  - [app\Models\UserOutletAccess.php](#file-appmodelsuseroutletaccessphp)
  - [app\Models\Voucher.php](#file-appmodelsvoucherphp)
- [Providers (app/Providers)](#providers-app-providers)
  - [app\Providers\AppServiceProvider.php](#file-appprovidersappserviceproviderphp)
- [Services (app/Services)](#services-app-services)
  - [app\Services\Auth\AuthService.php](#file-appservicesauthauthservicephp)
  - [app\Services\Cashier\CashierShiftService.php](#file-appservicescashiercashiershiftservicephp)
  - [app\Services\Cashier\CashMovementService.php](#file-appservicescashiercashmovementservicephp)
  - [app\Services\Catalog\ProductService.php](#file-appservicescatalogproductservicephp)
  - [app\Services\Customer\CustomerService.php](#file-appservicescustomercustomerservicephp)
  - [app\Services\Delivery\DeliveryService.php](#file-appservicesdeliverydeliveryservicephp)
  - [app\Services\Expense\ExpenseService.php](#file-appservicesexpenseexpenseservicephp)
  - [app\Services\Inventory\OutletMaterialStockService.php](#file-appservicesinventoryoutletmaterialstockservicephp)
  - [app\Services\Inventory\ProductBomService.php](#file-appservicesinventoryproductbomservicephp)
  - [app\Services\Inventory\RawMaterialService.php](#file-appservicesinventoryrawmaterialservicephp)
  - [app\Services\Inventory\StockAdjustmentService.php](#file-appservicesinventorystockadjustmentservicephp)
  - [app\Services\Inventory\StockMovementService.php](#file-appservicesinventorystockmovementservicephp)
  - [app\Services\Inventory\StockOpnameService.php](#file-appservicesinventorystockopnameservicephp)
  - [app\Services\Inventory\StockTransferService.php](#file-appservicesinventorystocktransferservicephp)
  - [app\Services\Inventory\UnitConversionService.php](#file-appservicesinventoryunitconversionservicephp)
  - [app\Services\Inventory\UnitService.php](#file-appservicesinventoryunitservicephp)
  - [app\Services\Kitchen\KitchenTicketService.php](#file-appserviceskitchenkitchenticketservicephp)
  - [app\Services\Outlet\OutletService.php](#file-appservicesoutletoutletservicephp)
  - [app\Services\Promotion\PromotionService.php](#file-appservicespromotionpromotionservicephp)
  - [app\Services\Purchasing\GoodsReceiptService.php](#file-appservicespurchasinggoodsreceiptservicephp)
  - [app\Services\Purchasing\PurchaseOrderService.php](#file-appservicespurchasingpurchaseorderservicephp)
  - [app\Services\Purchasing\SupplierService.php](#file-appservicespurchasingsupplierservicephp)
  - [app\Services\Report\ReportingService.php](#file-appservicesreportreportingservicephp)
  - [app\Services\Sales\OrderService.php](#file-appservicessalesorderservicephp)
  - [app\Services\Sales\PaymentService.php](#file-appservicessalespaymentservicephp)
  - [app\Services\SystemSetting\SystemSettingService.php](#file-appservicessystemsettingsystemsettingservicephp)
  - [app\Services\User\UserService.php](#file-appservicesuseruserservicephp)
  - [app\Services\Voucher\VoucherService.php](#file-appservicesvouchervoucherservicephp)
- [Database Seeders (database/seeders)](#database-seeders-database-seeders)
  - [database\seeders\DatabaseSeeder.php](#file-databaseseedersdatabaseseederphp)
  - [database\seeders\DeliveryPermissionSeeder.php](#file-databaseseedersdeliverypermissionseederphp)
  - [database\seeders\ExpenseCategorySeeder.php](#file-databaseseedersexpensecategoryseederphp)
  - [database\seeders\ExpensePermissionSeeder.php](#file-databaseseedersexpensepermissionseederphp)
  - [database\seeders\KitchenPermissionSeeder.php](#file-databaseseederskitchenpermissionseederphp)
  - [database\seeders\KitchenRolePermissionSeeder.php](#file-databaseseederskitchenrolepermissionseederphp)
  - [database\seeders\PaymentMethodSeeder.php](#file-databaseseederspaymentmethodseederphp)
  - [database\seeders\PermissionSeeder.php](#file-databaseseederspermissionseederphp)
  - [database\seeders\ReportPermissionSeeder.php](#file-databaseseedersreportpermissionseederphp)
  - [database\seeders\RoleSeeder.php](#file-databaseseedersroleseederphp)
  - [database\seeders\SuperAdminSeeder.php](#file-databaseseederssuperadminseederphp)
- [Entry Files](#entry-files)
  - [routes\api.php](#file-routesapiphp)
  - [bootstrap\app.php](#file-bootstrapappphp)
  - [app\Providers\AppServiceProvider.php](#file-appprovidersappserviceproviderphp)

## Controllers (app/Http/Controllers)

<a id="file-apphttpcontrollersapiauthcontrollerphp"></a>
### app\Http\Controllers\Api\AuthController.php
- SHA: `514e60f79401`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `AuthController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly AuthService $authService)
- **login**(LoginRequest $request) : *JsonResponse*
- **me**(Request $request) : *JsonResponse*
- **logout**(Request $request) : *JsonResponse*
- **changePassword**(ChangePasswordRequest $request) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\ChangePasswordRequest;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Resources\UserResource;
use App\Services\Auth\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(
        private readonly AuthService $authService
    ) {
    }

    public function login(LoginRequest $request): JsonResponse
    {
        $result = $this->authService->login(
            login: $request->string('login')->toString(),
            password: $request->string('password')->toString(),
            deviceName: $request->string('device_name')->toString() ?: 'api-token',
        );

        $user = $result['user']->load('roles', 'permissions', 'outletAccesses.outlet');

        return response()->json([
            'message' => 'Login berhasil.',
            'token' => $result['token'],
            'data' => new UserResource($user),
        ]);
    }

    public function me(Request $request): JsonResponse
    {
        $user = $request->user()->load('roles', 'permissions', 'outletAccesses.outlet');

        return response()->json([
            'message' => 'Profil user berhasil diambil.',
            'data' => new UserResource($user),
        ]);
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()?->currentAccessToken()?->delete();

        return response()->json([
            'message' => 'Logout berhasil.',
        ]);
    }

    public function changePassword(ChangePasswordRequest $request): JsonResponse
    {
        $request->user()->update([
            'password' => $request->string('password')->toString(),
        ]);

        $request->user()->tokens()->delete();

        $token = $request->user()->createToken('api-token')->plainTextToken;

        return response()->json([
            'message' => 'Password berhasil diubah.',
            'token' => $token,
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapicashiershiftcontrollerphp"></a>
### app\Http\Controllers\Api\CashierShiftController.php
- SHA: `aef2d6727c68`  
- Ukuran: 4 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `CashierShiftController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly CashierShiftService $cashierShiftService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreCashierShiftRequest $request) : *JsonResponse*
- **show**(Request $request, CashierShift $cashierShift) : *JsonResponse*
- **update**(UpdateCashierShiftRequest $request, CashierShift $cashierShift) : *JsonResponse*
- **close**(CloseCashierShiftRequest $request, CashierShift $cashierShift) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CashierShift\CloseCashierShiftRequest;
use App\Http\Requests\Api\CashierShift\StoreCashierShiftRequest;
use App\Http\Requests\Api\CashierShift\UpdateCashierShiftRequest;
use App\Http\Resources\CashierShiftResource;
use App\Models\CashierShift;
use App\Services\Cashier\CashierShiftService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CashierShiftController extends Controller
{
    public function __construct(
        private readonly CashierShiftService $cashierShiftService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('cashier_shifts.view'), 403);

        $rows = CashierShift::query()
            ->with([
                'outlet',
                'user',
                'cashMovements.creator',
                'orders.payments.paymentMethod',
            ])
            ->withCount('orders')
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('user_id'), function ($query) use ($request) {
                $query->where('user_id', (int) $request->input('user_id'));
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->string('status')->toString());
            })
            ->when($request->filled('opened_from'), function ($query) use ($request) {
                $query->where('opened_at', '>=', $request->input('opened_from'));
            })
            ->when($request->filled('opened_until'), function ($query) use ($request) {
                $query->where('opened_at', '<=', $request->input('opened_until'));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar cashier shift berhasil diambil.',
            'data' => CashierShiftResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreCashierShiftRequest $request): JsonResponse
    {
        $row = $this->cashierShiftService->open(
            payload: $request->validated(),
            userId: $request->user()->id,
        );

        return response()->json([
            'message' => 'Shift kasir berhasil dibuka.',
            'data' => new CashierShiftResource($row),
        ], 201);
    }

    public function show(Request $request, CashierShift $cashierShift): JsonResponse
    {
        abort_unless($request->user()->can('cashier_shifts.view'), 403);

        return response()->json([
            'message' => 'Detail cashier shift berhasil diambil.',
            'data' => new CashierShiftResource($cashierShift->load([
                'outlet',
                'user',
                'cashMovements.creator',
                'orders.payments.paymentMethod',
            ])->loadCount('orders')),
        ]);
    }

    public function update(UpdateCashierShiftRequest $request, CashierShift $cashierShift): JsonResponse
    {
        $row = $this->cashierShiftService->update($cashierShift, $request->validated());

        return response()->json([
            'message' => 'Shift kasir berhasil diupdate.',
            'data' => new CashierShiftResource($row),
        ]);
    }

    public function close(CloseCashierShiftRequest $request, CashierShift $cashierShift): JsonResponse
    {
        $row = $this->cashierShiftService->close(
            shift: $cashierShift,
            payload: $request->validated(),
            userId: $request->user()->id,
        );

        return response()->json([
            'message' => 'Shift kasir berhasil ditutup.',
            'data' => new CashierShiftResource($row),
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapicashmovementcontrollerphp"></a>
### app\Http\Controllers\Api\CashMovementController.php
- SHA: `2d2c7c988d0d`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `CashMovementController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly CashMovementService $cashMovementService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreCashMovementRequest $request) : *JsonResponse*
- **show**(Request $request, CashMovement $cashMovement) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CashMovement\StoreCashMovementRequest;
use App\Http\Resources\CashMovementResource;
use App\Models\CashMovement;
use App\Services\Cashier\CashMovementService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CashMovementController extends Controller
{
    public function __construct(
        private readonly CashMovementService $cashMovementService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('cash_movements.view'), 403);

        $rows = CashMovement::query()
            ->with([
                'cashierShift.outlet',
                'cashierShift.user',
                'creator',
            ])
            ->when($request->filled('cashier_shift_id'), function ($query) use ($request) {
                $query->where('cashier_shift_id', (int) $request->input('cashier_shift_id'));
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->whereHas('cashierShift', function ($shiftQuery) use ($request) {
                    $shiftQuery->where('outlet_id', (int) $request->input('outlet_id'));
                });
            })
            ->when($request->filled('movement_type'), function ($query) use ($request) {
                $query->where('movement_type', $request->string('movement_type')->toString());
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar cash movement berhasil diambil.',
            'data' => CashMovementResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreCashMovementRequest $request): JsonResponse
    {
        $row = $this->cashMovementService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Cash movement berhasil dibuat.',
            'data' => new CashMovementResource($row),
        ], 201);
    }

    public function show(Request $request, CashMovement $cashMovement): JsonResponse
    {
        abort_unless($request->user()->can('cash_movements.view'), 403);

        return response()->json([
            'message' => 'Detail cash movement berhasil diambil.',
            'data' => new CashMovementResource($cashMovement->load([
                'cashierShift.outlet',
                'cashierShift.user',
                'creator',
            ])),
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapicouriercontrollerphp"></a>
### app\Http\Controllers\Api\CourierController.php
- SHA: `c2204720ad2e`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `CourierController` extends `Controller`**

Metode Publik:
- **index**(Request $request) : *JsonResponse*
- **store**(StoreCourierRequest $request) : *JsonResponse*
- **show**(Request $request, Courier $courier) : *JsonResponse*
- **update**(UpdateCourierRequest $request, Courier $courier) : *JsonResponse*
- **destroy**(Request $request, Courier $courier) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Courier\StoreCourierRequest;
use App\Http\Requests\Api\Courier\UpdateCourierRequest;
use App\Http\Resources\CourierResource;
use App\Models\Courier;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('couriers.view'), 403);

        $rows = Courier::query()
            ->withCount('deliveries')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('phone', 'like', "%{$search}%")
                        ->orWhere('vehicle_number', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar courier berhasil diambil.',
            'data' => CourierResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreCourierRequest $request): JsonResponse
    {
        $row = Courier::query()->create($request->validated());

        return response()->json([
            'message' => 'Courier berhasil dibuat.',
            'data' => new CourierResource($row),
        ], 201);
    }

    public function show(Request $request, Courier $courier): JsonResponse
    {
        abort_unless($request->user()->can('couriers.view'), 403);

        return response()->json([
            'message' => 'Detail courier berhasil diambil.',
            'data' => new CourierResource($courier->loadCount('deliveries')),
        ]);
    }

    public function update(UpdateCourierRequest $request, Courier $courier): JsonResponse
    {
        $courier->update($request->validated());

        return response()->json([
            'message' => 'Courier berhasil diupdate.',
            'data' => new CourierResource($courier->fresh()->loadCount('deliveries')),
        ]);
    }

    public function destroy(Request $request, Courier $courier): JsonResponse
    {
        abort_unless($request->user()->can('couriers.delete'), 403);

        if ($courier->deliveries()->exists()) {
            return response()->json([
                'message' => 'Courier tidak bisa dihapus karena sudah dipakai delivery.',
            ], 422);
        }

        $courier->delete();

        return response()->json([
            'message' => 'Courier berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapicustomercontrollerphp"></a>
### app\Http\Controllers\Api\CustomerController.php
- SHA: `0041df4b4e21`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `CustomerController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly CustomerService $customerService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreCustomerRequest $request) : *JsonResponse*
- **show**(Request $request, Customer $customer) : *JsonResponse*
- **update**(UpdateCustomerRequest $request, Customer $customer) : *JsonResponse*
- **destroy**(Request $request, Customer $customer) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Customer\StoreCustomerRequest;
use App\Http\Requests\Api\Customer\UpdateCustomerRequest;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use App\Services\Customer\CustomerService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct(
        private readonly CustomerService $customerService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('customers.view'), 403);

        $customers = Customer::query()
            ->with('addresses')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('code', 'like', "%{$search}%")
                        ->orWhere('name', 'like', "%{$search}%")
                        ->orWhere('phone', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('is_member'), function ($query) use ($request) {
                $query->where('is_member', filter_var($request->input('is_member'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar customer berhasil diambil.',
            'data' => CustomerResource::collection($customers),
            'meta' => [
                'current_page' => $customers->currentPage(),
                'last_page' => $customers->lastPage(),
                'per_page' => $customers->perPage(),
                'total' => $customers->total(),
            ],
        ]);
    }

    public function store(StoreCustomerRequest $request): JsonResponse
    {
        $customer = $this->customerService->create($request->validated());

        return response()->json([
            'message' => 'Customer berhasil dibuat.',
            'data' => new CustomerResource($customer),
        ], 201);
    }

    public function show(Request $request, Customer $customer): JsonResponse
    {
        abort_unless($request->user()->can('customers.view'), 403);

        return response()->json([
            'message' => 'Detail customer berhasil diambil.',
            'data' => new CustomerResource($customer->load('addresses')),
        ]);
    }

    public function update(UpdateCustomerRequest $request, Customer $customer): JsonResponse
    {
        $customer = $this->customerService->update($customer, $request->validated());

        return response()->json([
            'message' => 'Customer berhasil diupdate.',
            'data' => new CustomerResource($customer),
        ]);
    }

    public function destroy(Request $request, Customer $customer): JsonResponse
    {
        abort_unless($request->user()->can('customers.delete'), 403);

        $customer->delete();

        return response()->json([
            'message' => 'Customer berhasil dihapus.',
        ]);
    }
}
```
</details>

<a id="file-apphttpcontrollersapideliverycontrollerphp"></a>
### app\Http\Controllers\Api\DeliveryController.php
- SHA: `e6541fbdae9e`  
- Ukuran: 6 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `DeliveryController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly DeliveryService $deliveryService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreDeliveryRequest $request) : *JsonResponse*
- **show**(Request $request, Delivery $delivery) : *JsonResponse*
- **update**(UpdateDeliveryRequest $request, Delivery $delivery) : *JsonResponse*
- **assignCourier**(AssignCourierRequest $request, Delivery $delivery) : *JsonResponse*
- **updateStatus**(UpdateDeliveryStatusRequest $request, Delivery $delivery) : *JsonResponse*
- **destroy**(Request $request, Delivery $delivery) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Delivery\AssignCourierRequest;
use App\Http\Requests\Api\Delivery\StoreDeliveryRequest;
use App\Http\Requests\Api\Delivery\UpdateDeliveryRequest;
use App\Http\Requests\Api\Delivery\UpdateDeliveryStatusRequest;
use App\Http\Resources\DeliveryResource;
use App\Models\Delivery;
use App\Services\Delivery\DeliveryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function __construct(
        private readonly DeliveryService $deliveryService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('deliveries.view'), 403);

        $rows = Delivery::query()
            ->with([
                'order.outlet',
                'order.customer',
                'customerAddress.customer',
                'courier',
            ])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->whereHas('order', function ($orderQuery) use ($search) {
                        $orderQuery->where('order_number', 'like', "%{$search}%")
                            ->orWhere('queue_number', 'like', "%{$search}%");
                    })
                        ->orWhereHas('courier', function ($courierQuery) use ($search) {
                            $courierQuery->where('name', 'like', "%{$search}%")
                                ->orWhere('phone', 'like', "%{$search}%");
                        });
                });
            })
            ->when($request->filled('order_id'), function ($query) use ($request) {
                $query->where('order_id', (int) $request->input('order_id'));
            })
            ->when($request->filled('courier_id'), function ($query) use ($request) {
                $query->where('courier_id', (int) $request->input('courier_id'));
            })
            ->when($request->filled('delivery_status'), function ($query) use ($request) {
                $query->where('delivery_status', $request->string('delivery_status')->toString());
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->whereHas('order', function ($orderQuery) use ($request) {
                    $orderQuery->where('outlet_id', (int) $request->input('outlet_id'));
                });
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar delivery berhasil diambil.',
            'data' => DeliveryResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreDeliveryRequest $request): JsonResponse
    {
        $row = $this->deliveryService->create($request->validated());

        return response()->json([
            'message' => 'Delivery berhasil dibuat.',
            'data' => new DeliveryResource($row),
        ], 201);
    }

    public function show(Request $request, Delivery $delivery): JsonResponse
    {
        abort_unless($request->user()->can('deliveries.view'), 403);

        return response()->json([
            'message' => 'Detail delivery berhasil diambil.',
            'data' => new DeliveryResource($delivery->load([
                'order.outlet',
                'order.customer',
                'customerAddress.customer',
                'courier',
            ])),
        ]);
    }

    public function update(UpdateDeliveryRequest $request, Delivery $delivery): JsonResponse
    {
        $row = $this->deliveryService->update($delivery, $request->validated());

        return response()->json([
            'message' => 'Delivery berhasil diupdate.',
            'data' => new DeliveryResource($row),
        ]);
    }

    public function assignCourier(AssignCourierRequest $request, Delivery $delivery): JsonResponse
    {
        $row = $this->deliveryService->assignCourier(
            delivery: $delivery,
            courierId: (int) $request->validated('courier_id'),
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Courier berhasil di-assign ke delivery.',
            'data' => new DeliveryResource($row),
        ]);
    }

    public function updateStatus(UpdateDeliveryStatusRequest $request, Delivery $delivery): JsonResponse
    {
        $row = $this->deliveryService->changeStatus(
            delivery: $delivery,
            status: $request->string('delivery_status')->toString(),
            deliveredAt: $request->input('delivered_at'),
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Status delivery berhasil diupdate.',
            'data' => new DeliveryResource($row),
        ]);
    }

    public function destroy(Request $request, Delivery $delivery): JsonResponse
    {
        abort_unless($request->user()->can('deliveries.delete'), 403);

        if (!in_array($delivery->delivery_status, ['pending', 'cancelled', 'failed'], true)) {
            return response()->json([
                'message' => 'Hanya delivery pending, failed, atau cancelled yang boleh dihapus.',
            ], 422);
        }

        $delivery->delete();

        return response()->json([
            'message' => 'Delivery berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapiexpensecategorycontrollerphp"></a>
### app\Http\Controllers\Api\ExpenseCategoryController.php
- SHA: `ef6520000055`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `ExpenseCategoryController` extends `Controller`**

Metode Publik:
- **index**(Request $request) : *JsonResponse*
- **store**(StoreExpenseCategoryRequest $request) : *JsonResponse*
- **show**(Request $request, ExpenseCategory $expenseCategory) : *JsonResponse*
- **update**(UpdateExpenseCategoryRequest $request, ExpenseCategory $expenseCategory) : *JsonResponse*
- **destroy**(Request $request, ExpenseCategory $expenseCategory) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ExpenseCategory\StoreExpenseCategoryRequest;
use App\Http\Requests\Api\ExpenseCategory\UpdateExpenseCategoryRequest;
use App\Http\Resources\ExpenseCategoryResource;
use App\Models\ExpenseCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ExpenseCategoryController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('expense_categories.view'), 403);

        $rows = ExpenseCategory::query()
            ->withCount('expenses')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where('name', 'like', "%{$search}%");
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar kategori expense berhasil diambil.',
            'data' => ExpenseCategoryResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreExpenseCategoryRequest $request): JsonResponse
    {
        $row = ExpenseCategory::query()->create($request->validated());

        return response()->json([
            'message' => 'Kategori expense berhasil dibuat.',
            'data' => new ExpenseCategoryResource($row),
        ], 201);
    }

    public function show(Request $request, ExpenseCategory $expenseCategory): JsonResponse
    {
        abort_unless($request->user()->can('expense_categories.view'), 403);

        return response()->json([
            'message' => 'Detail kategori expense berhasil diambil.',
            'data' => new ExpenseCategoryResource($expenseCategory->loadCount('expenses')),
        ]);
    }

    public function update(UpdateExpenseCategoryRequest $request, ExpenseCategory $expenseCategory): JsonResponse
    {
        $expenseCategory->update($request->validated());

        return response()->json([
            'message' => 'Kategori expense berhasil diupdate.',
            'data' => new ExpenseCategoryResource($expenseCategory->fresh()->loadCount('expenses')),
        ]);
    }

    public function destroy(Request $request, ExpenseCategory $expenseCategory): JsonResponse
    {
        abort_unless($request->user()->can('expense_categories.delete'), 403);

        if ($expenseCategory->expenses()->exists()) {
            return response()->json([
                'message' => 'Kategori expense tidak bisa dihapus karena sudah dipakai expense.',
            ], 422);
        }

        $expenseCategory->delete();

        return response()->json([
            'message' => 'Kategori expense berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapiexpensecontrollerphp"></a>
### app\Http\Controllers\Api\ExpenseController.php
- SHA: `93ce60f5056e`  
- Ukuran: 6 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `ExpenseController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly ExpenseService $expenseService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreExpenseRequest $request) : *JsonResponse*
- **show**(Request $request, Expense $expense) : *JsonResponse*
- **update**(UpdateExpenseRequest $request, Expense $expense) : *JsonResponse*
- **submit**(Request $request, Expense $expense) : *JsonResponse*
- **approve**(ApproveExpenseRequest $request, Expense $expense) : *JsonResponse*
- **reject**(RejectExpenseRequest $request, Expense $expense) : *JsonResponse*
- **uploadAttachments**(UploadExpenseAttachmentRequest $request, Expense $expense) : *JsonResponse*
- **deleteAttachment**(Request $request, ExpenseAttachment $expenseAttachment) : *JsonResponse*
- **destroy**(Request $request, Expense $expense) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Expense\ApproveExpenseRequest;
use App\Http\Requests\Api\Expense\RejectExpenseRequest;
use App\Http\Requests\Api\Expense\StoreExpenseRequest;
use App\Http\Requests\Api\Expense\UpdateExpenseRequest;
use App\Http\Requests\Api\Expense\UploadExpenseAttachmentRequest;
use App\Http\Resources\ExpenseResource;
use App\Models\Expense;
use App\Models\ExpenseAttachment;
use App\Services\Expense\ExpenseService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function __construct(
        private readonly ExpenseService $expenseService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('expenses.view'), 403);

        $rows = Expense::query()
            ->with([
                'outlet',
                'category',
                'creator',
                'approver',
                'attachments',
            ])
            ->withCount('attachments')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('description', 'like', "%{$search}%")
                        ->orWhereHas('category', fn ($categoryQuery) => $categoryQuery->where('name', 'like', "%{$search}%"))
                        ->orWhereHas('outlet', fn ($outletQuery) => $outletQuery->where('name', 'like', "%{$search}%"));
                });
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('expense_category_id'), function ($query) use ($request) {
                $query->where('expense_category_id', (int) $request->input('expense_category_id'));
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->string('status')->toString());
            })
            ->when($request->filled('expense_from'), function ($query) use ($request) {
                $query->whereDate('expense_date', '>=', $request->input('expense_from'));
            })
            ->when($request->filled('expense_until'), function ($query) use ($request) {
                $query->whereDate('expense_date', '<=', $request->input('expense_until'));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar expense berhasil diambil.',
            'data' => ExpenseResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreExpenseRequest $request): JsonResponse
    {
        $row = $this->expenseService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Expense berhasil dibuat.',
            'data' => new ExpenseResource($row),
        ], 201);
    }

    public function show(Request $request, Expense $expense): JsonResponse
    {
        abort_unless($request->user()->can('expenses.view'), 403);

        return response()->json([
            'message' => 'Detail expense berhasil diambil.',
            'data' => new ExpenseResource($expense->load([
                'outlet',
                'category',
                'creator',
                'approver',
                'attachments',
            ])->loadCount('attachments')),
        ]);
    }

    public function update(UpdateExpenseRequest $request, Expense $expense): JsonResponse
    {
        $row = $this->expenseService->update($expense, $request->validated());

        return response()->json([
            'message' => 'Expense berhasil diupdate.',
            'data' => new ExpenseResource($row),
        ]);
    }

    public function submit(Request $request, Expense $expense): JsonResponse
    {
        abort_unless($request->user()->can('expenses.submit'), 403);

        $row = $this->expenseService->submit($expense);

        return response()->json([
            'message' => 'Expense berhasil disubmit.',
            'data' => new ExpenseResource($row),
        ]);
    }

    public function approve(ApproveExpenseRequest $request, Expense $expense): JsonResponse
    {
        $row = $this->expenseService->approve(
            expense: $expense,
            payload: $request->validated(),
            userId: $request->user()->id,
        );

        return response()->json([
            'message' => 'Expense berhasil diapprove.',
            'data' => new ExpenseResource($row),
        ]);
    }

    public function reject(RejectExpenseRequest $request, Expense $expense): JsonResponse
    {
        $row = $this->expenseService->reject(
            expense: $expense,
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Expense berhasil direject.',
            'data' => new ExpenseResource($row),
        ]);
    }

    public function uploadAttachments(UploadExpenseAttachmentRequest $request, Expense $expense): JsonResponse
    {
        $row = $this->expenseService->addAttachments(
            expense: $expense,
            attachments: $request->file('attachments', []),
        );

        return response()->json([
            'message' => 'Attachment expense berhasil ditambahkan.',
            'data' => new ExpenseResource($row),
        ]);
    }

    public function deleteAttachment(Request $request, ExpenseAttachment $expenseAttachment): JsonResponse
    {
        abort_unless($request->user()->can('expenses.update'), 403);

        $this->expenseService->deleteAttachment($expenseAttachment);

        return response()->json([
            'message' => 'Attachment expense berhasil dihapus.',
        ]);
    }

    public function destroy(Request $request, Expense $expense): JsonResponse
    {
        abort_unless($request->user()->can('expenses.delete'), 403);

        $this->expenseService->delete($expense);

        return response()->json([
            'message' => 'Expense berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapigoodsreceiptcontrollerphp"></a>
### app\Http\Controllers\Api\GoodsReceiptController.php
- SHA: `b307732ff28a`  
- Ukuran: 5 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `GoodsReceiptController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly GoodsReceiptService $goodsReceiptService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreGoodsReceiptRequest $request) : *JsonResponse*
- **show**(Request $request, GoodsReceipt $goodsReceipt) : *JsonResponse*
- **update**(UpdateGoodsReceiptRequest $request, GoodsReceipt $goodsReceipt) : *JsonResponse*
- **post**(PostGoodsReceiptRequest $request, GoodsReceipt $goodsReceipt) : *JsonResponse*
- **cancel**(Request $request, GoodsReceipt $goodsReceipt) : *JsonResponse*
- **destroy**(Request $request, GoodsReceipt $goodsReceipt) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Purchasing\GoodsReceipt\PostGoodsReceiptRequest;
use App\Http\Requests\Api\Purchasing\GoodsReceipt\StoreGoodsReceiptRequest;
use App\Http\Requests\Api\Purchasing\GoodsReceipt\UpdateGoodsReceiptRequest;
use App\Http\Resources\GoodsReceiptResource;
use App\Models\GoodsReceipt;
use App\Services\Purchasing\GoodsReceiptService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GoodsReceiptController extends Controller
{
    public function __construct(
        private readonly GoodsReceiptService $goodsReceiptService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('goods_receipts.view'), 403);

        $rows = GoodsReceipt::query()
            ->with([
                'purchaseOrder.supplier',
                'outlet',
                'receiver',
                'items.rawMaterial',
                'items.unit',
            ])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('receipt_number', 'like', "%{$search}%")
                        ->orWhereHas('purchaseOrder', fn ($pq) => $pq->where('po_number', 'like', "%{$search}%"));
                });
            })
            ->when($request->filled('purchase_order_id'), function ($query) use ($request) {
                $query->where('purchase_order_id', (int) $request->input('purchase_order_id'));
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->string('status')->toString());
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar goods receipt berhasil diambil.',
            'data' => GoodsReceiptResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreGoodsReceiptRequest $request): JsonResponse
    {
        $row = $this->goodsReceiptService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Goods receipt berhasil dibuat.',
            'data' => new GoodsReceiptResource($row),
        ], 201);
    }

    public function show(Request $request, GoodsReceipt $goodsReceipt): JsonResponse
    {
        abort_unless($request->user()->can('goods_receipts.view'), 403);

        return response()->json([
            'message' => 'Detail goods receipt berhasil diambil.',
            'data' => new GoodsReceiptResource($goodsReceipt->load([
                'purchaseOrder.supplier',
                'outlet',
                'receiver',
                'items.rawMaterial',
                'items.unit',
            ])),
        ]);
    }

    public function update(UpdateGoodsReceiptRequest $request, GoodsReceipt $goodsReceipt): JsonResponse
    {
        $row = $this->goodsReceiptService->update($goodsReceipt, $request->validated());

        return response()->json([
            'message' => 'Goods receipt berhasil diupdate.',
            'data' => new GoodsReceiptResource($row),
        ]);
    }

    public function post(PostGoodsReceiptRequest $request, GoodsReceipt $goodsReceipt): JsonResponse
    {
        $row = $this->goodsReceiptService->post($goodsReceipt, $request->user()->id);

        return response()->json([
            'message' => 'Goods receipt berhasil dipost.',
            'data' => new GoodsReceiptResource($row),
        ]);
    }

    public function cancel(Request $request, GoodsReceipt $goodsReceipt): JsonResponse
    {
        abort_unless($request->user()->can('goods_receipts.cancel'), 403);

        $row = $this->goodsReceiptService->cancel($goodsReceipt);

        return response()->json([
            'message' => 'Goods receipt berhasil dibatalkan.',
            'data' => new GoodsReceiptResource($row),
        ]);
    }

    public function destroy(Request $request, GoodsReceipt $goodsReceipt): JsonResponse
    {
        abort_unless($request->user()->can('goods_receipts.delete'), 403);

        if ($goodsReceipt->status !== 'draft') {
            return response()->json([
                'message' => 'Hanya goods receipt draft yang boleh dihapus.',
            ], 422);
        }

        $goodsReceipt->delete();

        return response()->json([
            'message' => 'Goods receipt berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapikitchenticketcontrollerphp"></a>
### app\Http\Controllers\Api\KitchenTicketController.php
- SHA: `066525246175`  
- Ukuran: 7 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `KitchenTicketController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly KitchenTicketService $kitchenTicketService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreKitchenTicketRequest $request) : *JsonResponse*
- **show**(Request $request, KitchenTicket $kitchenTicket) : *JsonResponse*
- **print**(PrintKitchenTicketRequest $request, KitchenTicket $kitchenTicket) : *JsonResponse*
- **startPreparing**(StartPreparingKitchenTicketRequest $request, KitchenTicket $kitchenTicket) : *JsonResponse*
- **markReady**(ReadyKitchenTicketRequest $request, KitchenTicket $kitchenTicket) : *JsonResponse*
- **serve**(ServeKitchenTicketRequest $request, KitchenTicket $kitchenTicket) : *JsonResponse*
- **cancel**(CancelKitchenTicketRequest $request, KitchenTicket $kitchenTicket) : *JsonResponse*
- **destroy**(Request $request, KitchenTicket $kitchenTicket) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Kitchen\CancelKitchenTicketRequest;
use App\Http\Requests\Api\Kitchen\PrintKitchenTicketRequest;
use App\Http\Requests\Api\Kitchen\ReadyKitchenTicketRequest;
use App\Http\Requests\Api\Kitchen\ServeKitchenTicketRequest;
use App\Http\Requests\Api\Kitchen\StartPreparingKitchenTicketRequest;
use App\Http\Requests\Api\Kitchen\StoreKitchenTicketRequest;
use App\Http\Resources\KitchenTicketResource;
use App\Models\KitchenTicket;
use App\Services\Kitchen\KitchenTicketService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class KitchenTicketController extends Controller
{
    public function __construct(
        private readonly KitchenTicketService $kitchenTicketService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('kitchen_tickets.view'), 403);

        $rows = KitchenTicket::query()
            ->with([
                'order.outlet',
                'order.customer',
                'items.orderItem.variants',
                'items.orderItem.modifiers',
            ])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('ticket_number', 'like', "%{$search}%")
                        ->orWhereHas('order', function ($orderQuery) use ($search) {
                            $orderQuery->where('order_number', 'like', "%{$search}%")
                                ->orWhere('queue_number', 'like', "%{$search}%");
                        });
                });
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->string('status')->toString());
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->whereHas('order', function ($orderQuery) use ($request) {
                    $orderQuery->where('outlet_id', (int) $request->input('outlet_id'));
                });
            })
            ->when($request->filled('order_id'), function ($query) use ($request) {
                $query->where('order_id', (int) $request->input('order_id'));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar kitchen ticket berhasil diambil.',
            'data' => KitchenTicketResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreKitchenTicketRequest $request): JsonResponse
    {
        abort_unless($request->user()->can('kitchen_tickets.create'), 403);

        $row = $this->kitchenTicketService->createFromOrderId(
            orderId: (int) $request->validated('order_id'),
        );

        return response()->json([
            'message' => 'Kitchen ticket berhasil dibuat.',
            'data' => new KitchenTicketResource($row),
        ], 201);
    }

    public function show(Request $request, KitchenTicket $kitchenTicket): JsonResponse
    {
        abort_unless($request->user()->can('kitchen_tickets.view'), 403);

        return response()->json([
            'message' => 'Detail kitchen ticket berhasil diambil.',
            'data' => new KitchenTicketResource($kitchenTicket->load([
                'order.outlet',
                'order.customer',
                'items.orderItem.variants',
                'items.orderItem.modifiers',
            ])),
        ]);
    }

    public function print(PrintKitchenTicketRequest $request, KitchenTicket $kitchenTicket): JsonResponse
    {
        abort_unless($request->user()->can('kitchen_tickets.print'), 403);

        $row = $this->kitchenTicketService->markPrinted(
            ticket: $kitchenTicket,
            printedAt: $request->input('printed_at'),
        );

        return response()->json([
            'message' => 'Kitchen ticket berhasil ditandai sudah dicetak.',
            'data' => new KitchenTicketResource($row),
        ]);
    }

    public function startPreparing(StartPreparingKitchenTicketRequest $request, KitchenTicket $kitchenTicket): JsonResponse
    {
        abort_unless($request->user()->can('kitchen_tickets.start_preparing'), 403);

        $row = $this->kitchenTicketService->startPreparing(
            ticket: $kitchenTicket,
            userId: $request->user()->id,
            preparedAt: $request->input('prepared_at'),
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Kitchen ticket berhasil diubah ke preparing.',
            'data' => new KitchenTicketResource($row),
        ]);
    }

    public function markReady(ReadyKitchenTicketRequest $request, KitchenTicket $kitchenTicket): JsonResponse
    {
        abort_unless($request->user()->can('kitchen_tickets.mark_ready'), 403);

        $row = $this->kitchenTicketService->markReady(
            ticket: $kitchenTicket,
            userId: $request->user()->id,
            readyAt: $request->input('ready_at'),
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Kitchen ticket berhasil diubah ke ready.',
            'data' => new KitchenTicketResource($row),
        ]);
    }

    public function serve(ServeKitchenTicketRequest $request, KitchenTicket $kitchenTicket): JsonResponse
    {
        abort_unless($request->user()->can('kitchen_tickets.serve'), 403);

        $row = $this->kitchenTicketService->serve(
            ticket: $kitchenTicket,
            userId: $request->user()->id,
            completedAt: $request->input('completed_at'),
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Kitchen ticket berhasil di-serve / diselesaikan.',
            'data' => new KitchenTicketResource($row),
        ]);
    }

    public function cancel(CancelKitchenTicketRequest $request, KitchenTicket $kitchenTicket): JsonResponse
    {
        abort_unless($request->user()->can('kitchen_tickets.cancel'), 403);

        $row = $this->kitchenTicketService->cancel(
            ticket: $kitchenTicket,
            userId: $request->user()->id,
            cancelledAt: $request->input('cancelled_at'),
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Kitchen ticket berhasil dibatalkan.',
            'data' => new KitchenTicketResource($row),
        ]);
    }

    public function destroy(Request $request, KitchenTicket $kitchenTicket): JsonResponse
    {
        abort_unless($request->user()->can('kitchen_tickets.delete'), 403);

        if (!in_array($kitchenTicket->status, ['pending', 'cancelled'], true)) {
            return response()->json([
                'message' => 'Hanya kitchen ticket pending atau cancelled yang boleh dihapus.',
            ], 422);
        }

        $kitchenTicket->delete();

        return response()->json([
            'message' => 'Kitchen ticket berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapiordercontrollerphp"></a>
### app\Http\Controllers\Api\OrderController.php
- SHA: `09ea563130a2`  
- Ukuran: 7 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `OrderController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly OrderService $orderService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreOrderRequest $request) : *JsonResponse*
- **show**(Request $request, Order $order) : *JsonResponse*
- **update**(UpdateOrderRequest $request, Order $order) : *JsonResponse*
- **confirm**(Request $request, Order $order) : *JsonResponse*
- **complete**(Request $request, Order $order) : *JsonResponse*
- **cancel**(Request $request, Order $order) : *JsonResponse*
- **destroy**(Request $request, Order $order) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Order\StoreOrderRequest;
use App\Http\Requests\Api\Order\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Services\Sales\OrderService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct(
        private readonly OrderService $orderService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('orders.view'), 403);

        $orders = Order::query()
            ->with([
                'outlet',
                'cashierShift',
                'customer',
                'creator',
                'canceller',
                'items.product',
                'items.variants',
                'items.modifiers',
                'payments.paymentMethod',
                'payments.receiver',
                'statusHistories.changer',
            ])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('order_number', 'like', "%{$search}%")
                        ->orWhere('queue_number', 'like', "%{$search}%")
                        ->orWhereHas('customer', function ($customerQuery) use ($search) {
                            $customerQuery->where('name', 'like', "%{$search}%")
                                ->orWhere('phone', 'like', "%{$search}%");
                        });
                });
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('cashier_shift_id'), function ($query) use ($request) {
                $query->where('cashier_shift_id', (int) $request->input('cashier_shift_id'));
            })
            ->when($request->filled('customer_id'), function ($query) use ($request) {
                $query->where('customer_id', (int) $request->input('customer_id'));
            })
            ->when($request->filled('order_channel'), function ($query) use ($request) {
                $query->where('order_channel', $request->string('order_channel')->toString());
            })
            ->when($request->filled('order_status'), function ($query) use ($request) {
                $query->where('order_status', $request->string('order_status')->toString());
            })
            ->when($request->filled('payment_status'), function ($query) use ($request) {
                $query->where('payment_status', $request->string('payment_status')->toString());
            })
            ->when($request->filled('ordered_from'), function ($query) use ($request) {
                $query->where('ordered_at', '>=', $request->input('ordered_from'));
            })
            ->when($request->filled('ordered_until'), function ($query) use ($request) {
                $query->where('ordered_at', '<=', $request->input('ordered_until'));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar order berhasil diambil.',
            'data' => OrderResource::collection($orders),
            'meta' => [
                'current_page' => $orders->currentPage(),
                'last_page' => $orders->lastPage(),
                'per_page' => $orders->perPage(),
                'total' => $orders->total(),
            ],
        ]);
    }

    public function store(StoreOrderRequest $request): JsonResponse
    {
        $order = $this->orderService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Order berhasil dibuat.',
            'data' => new OrderResource($order),
        ], 201);
    }

    public function show(Request $request, Order $order): JsonResponse
    {
        abort_unless($request->user()->can('orders.view'), 403);

        return response()->json([
            'message' => 'Detail order berhasil diambil.',
            'data' => new OrderResource($order->load([
                'outlet',
                'cashierShift',
                'customer',
                'creator',
                'canceller',
                'items.product',
                'items.variants',
                'items.modifiers',
                'payments.paymentMethod',
                'payments.receiver',
                'statusHistories.changer',
            ])),
        ]);
    }

    public function update(UpdateOrderRequest $request, Order $order): JsonResponse
    {
        $order = $this->orderService->update($order, $request->validated());

        return response()->json([
            'message' => 'Order berhasil diupdate.',
            'data' => new OrderResource($order),
        ]);
    }

    public function confirm(Request $request, Order $order): JsonResponse
    {
        abort_unless($request->user()->can('orders.update'), 403);

        $order = $this->orderService->changeStatus(
            order: $order,
            newStatus: 'confirmed',
            userId: $request->user()->id,
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Order berhasil dikonfirmasi.',
            'data' => new OrderResource($order),
        ]);
    }

    public function complete(Request $request, Order $order): JsonResponse
    {
        abort_unless($request->user()->can('orders.update'), 403);

        $order = $this->orderService->changeStatus(
            order: $order,
            newStatus: 'completed',
            userId: $request->user()->id,
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Order berhasil diselesaikan.',
            'data' => new OrderResource($order),
        ]);
    }

    public function cancel(Request $request, Order $order): JsonResponse
    {
        abort_unless($request->user()->can('orders.cancel'), 403);

        $order = $this->orderService->cancel(
            order: $order,
            userId: $request->user()->id,
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Order berhasil dibatalkan.',
            'data' => new OrderResource($order),
        ]);
    }

    public function destroy(Request $request, Order $order): JsonResponse
    {
        abort_unless($request->user()->can('orders.delete'), 403);

        if ($order->order_status !== 'draft') {
            return response()->json([
                'message' => 'Hanya order draft yang boleh dihapus.',
            ], 422);
        }

        $order->delete();

        return response()->json([
            'message' => 'Order berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapioutletcontrollerphp"></a>
### app\Http\Controllers\Api\OutletController.php
- SHA: `1d3439cbf2ee`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `OutletController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly OutletService $outletService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreOutletRequest $request) : *JsonResponse*
- **show**(Request $request, Outlet $outlet) : *JsonResponse*
- **update**(UpdateOutletRequest $request, Outlet $outlet) : *JsonResponse*
- **destroy**(Request $request, Outlet $outlet) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Outlet\StoreOutletRequest;
use App\Http\Requests\Api\Outlet\UpdateOutletRequest;
use App\Http\Resources\OutletResource;
use App\Models\Outlet;
use App\Services\Outlet\OutletService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    public function __construct(
        private readonly OutletService $outletService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('outlets.view'), 403);

        $outlets = Outlet::query()
            ->with('setting')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('code', 'like', "%{$search}%")
                        ->orWhere('name', 'like', "%{$search}%")
                        ->orWhere('city', 'like', "%{$search}%")
                        ->orWhere('province', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar outlet berhasil diambil.',
            'data' => OutletResource::collection($outlets),
            'meta' => [
                'current_page' => $outlets->currentPage(),
                'last_page' => $outlets->lastPage(),
                'per_page' => $outlets->perPage(),
                'total' => $outlets->total(),
            ],
        ]);
    }

    public function store(StoreOutletRequest $request): JsonResponse
    {
        $outlet = $this->outletService->create($request->validated());

        return response()->json([
            'message' => 'Outlet berhasil dibuat.',
            'data' => new OutletResource($outlet),
        ], 201);
    }

    public function show(Request $request, Outlet $outlet): JsonResponse
    {
        abort_unless($request->user()->can('outlets.view'), 403);

        return response()->json([
            'message' => 'Detail outlet berhasil diambil.',
            'data' => new OutletResource($outlet->load('setting')),
        ]);
    }

    public function update(UpdateOutletRequest $request, Outlet $outlet): JsonResponse
    {
        $outlet = $this->outletService->update($outlet, $request->validated());

        return response()->json([
            'message' => 'Outlet berhasil diupdate.',
            'data' => new OutletResource($outlet),
        ]);
    }

    public function destroy(Request $request, Outlet $outlet): JsonResponse
    {
        abort_unless($request->user()->can('outlets.delete'), 403);

        $outlet->delete();

        return response()->json([
            'message' => 'Outlet berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapioutletmaterialstockcontrollerphp"></a>
### app\Http\Controllers\Api\OutletMaterialStockController.php
- SHA: `cdad9c78027a`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `OutletMaterialStockController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly OutletMaterialStockService $outletMaterialStockService)
- **index**(Request $request) : *JsonResponse*
- **upsert**(UpsertOutletMaterialStockRequest $request) : *JsonResponse*
- **show**(Request $request, OutletMaterialStock $outletMaterialStock) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\OutletMaterialStock\UpsertOutletMaterialStockRequest;
use App\Http\Resources\OutletMaterialStockResource;
use App\Models\OutletMaterialStock;
use App\Services\Inventory\OutletMaterialStockService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OutletMaterialStockController extends Controller
{
    public function __construct(
        private readonly OutletMaterialStockService $outletMaterialStockService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('outlet_material_stocks.view'), 403);

        $rows = OutletMaterialStock::query()
            ->with(['outlet', 'rawMaterial'])
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('raw_material_id'), function ($query) use ($request) {
                $query->where('raw_material_id', (int) $request->input('raw_material_id'));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar stok bahan per outlet berhasil diambil.',
            'data' => OutletMaterialStockResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function upsert(UpsertOutletMaterialStockRequest $request): JsonResponse
    {
        $row = $this->outletMaterialStockService->upsert($request->validated());

        return response()->json([
            'message' => 'Stok bahan outlet berhasil disimpan.',
            'data' => new OutletMaterialStockResource($row),
        ]);
    }

    public function show(Request $request, OutletMaterialStock $outletMaterialStock): JsonResponse
    {
        abort_unless($request->user()->can('outlet_material_stocks.view'), 403);

        return response()->json([
            'message' => 'Detail stok bahan outlet berhasil diambil.',
            'data' => new OutletMaterialStockResource($outletMaterialStock->load(['outlet', 'rawMaterial'])),
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapioutletsettingcontrollerphp"></a>
### app\Http\Controllers\Api\OutletSettingController.php
- SHA: `a9feef83b398`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `OutletSettingController` extends `Controller`**

Metode Publik:
- **show**(Request $request, Outlet $outlet) : *JsonResponse*
- **update**(UpdateOutletSettingRequest $request, Outlet $outlet) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Outlet\UpdateOutletSettingRequest;
use App\Http\Resources\OutletSettingResource;
use App\Models\Outlet;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OutletSettingController extends Controller
{
    public function show(Request $request, Outlet $outlet): JsonResponse
    {
        abort_unless($request->user()->can('outlet_settings.view'), 403);

        $setting = $outlet->setting()->firstOrCreate(
            ['outlet_id' => $outlet->id],
            [
                'tax_percent' => 0,
                'service_charge_percent' => 0,
                'currency_code' => 'IDR',
                'timezone' => 'Asia/Jakarta',
                'allow_negative_stock' => false,
                'low_stock_notification_enabled' => true,
            ]
        );

        return response()->json([
            'message' => 'Setting outlet berhasil diambil.',
            'data' => new OutletSettingResource($setting),
        ]);
    }

    public function update(UpdateOutletSettingRequest $request, Outlet $outlet): JsonResponse
    {
        $setting = $outlet->setting()->firstOrCreate(
            ['outlet_id' => $outlet->id],
            [
                'tax_percent' => 0,
                'service_charge_percent' => 0,
                'currency_code' => 'IDR',
                'timezone' => 'Asia/Jakarta',
                'allow_negative_stock' => false,
                'low_stock_notification_enabled' => true,
            ]
        );

        $setting->update($request->validated());

        return response()->json([
            'message' => 'Setting outlet berhasil diupdate.',
            'data' => new OutletSettingResource($setting->fresh()),
        ]);
    }
}
```
</details>

<a id="file-apphttpcontrollersapipaymentcontrollerphp"></a>
### app\Http\Controllers\Api\PaymentController.php
- SHA: `bc9f8cba3b8c`  
- Ukuran: 4 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `PaymentController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly PaymentService $paymentService)
- **index**(Request $request) : *JsonResponse*
- **store**(StorePaymentRequest $request) : *JsonResponse*
- **show**(Request $request, Payment $payment) : *JsonResponse*
- **cancel**(CancelPaymentRequest $request, Payment $payment) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Payment\CancelPaymentRequest;
use App\Http\Requests\Api\Payment\StorePaymentRequest;
use App\Http\Resources\PaymentResource;
use App\Models\Payment;
use App\Services\Sales\PaymentService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct(
        private readonly PaymentService $paymentService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('payments.view'), 403);

        $rows = Payment::query()
            ->with([
                'order.outlet',
                'order.cashierShift',
                'paymentMethod',
                'receiver',
            ])
            ->when($request->filled('order_id'), function ($query) use ($request) {
                $query->where('order_id', (int) $request->input('order_id'));
            })
            ->when($request->filled('payment_method_id'), function ($query) use ($request) {
                $query->where('payment_method_id', (int) $request->input('payment_method_id'));
            })
            ->when($request->filled('cashier_shift_id'), function ($query) use ($request) {
                $query->whereHas('order', function ($orderQuery) use ($request) {
                    $orderQuery->where('cashier_shift_id', (int) $request->input('cashier_shift_id'));
                });
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->whereHas('order', function ($orderQuery) use ($request) {
                    $orderQuery->where('outlet_id', (int) $request->input('outlet_id'));
                });
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->string('status')->toString());
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar payment berhasil diambil.',
            'data' => PaymentResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StorePaymentRequest $request): JsonResponse
    {
        $row = $this->paymentService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Payment berhasil dibuat.',
            'data' => new PaymentResource($row),
        ], 201);
    }

    public function show(Request $request, Payment $payment): JsonResponse
    {
        abort_unless($request->user()->can('payments.view'), 403);

        return response()->json([
            'message' => 'Detail payment berhasil diambil.',
            'data' => new PaymentResource($payment->load([
                'order.outlet',
                'order.cashierShift',
                'paymentMethod',
                'receiver',
            ])),
        ]);
    }

    public function cancel(CancelPaymentRequest $request, Payment $payment): JsonResponse
    {
        $row = $this->paymentService->cancel(
            payment: $payment,
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Payment berhasil dibatalkan.',
            'data' => new PaymentResource($row),
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapipaymentmethodcontrollerphp"></a>
### app\Http\Controllers\Api\PaymentMethodController.php
- SHA: `9c0849d7a38e`  
- Ukuran: 4 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `PaymentMethodController` extends `Controller`**

Metode Publik:
- **index**(Request $request) : *JsonResponse*
- **store**(StorePaymentMethodRequest $request) : *JsonResponse*
- **show**(Request $request, PaymentMethod $paymentMethod) : *JsonResponse*
- **update**(UpdatePaymentMethodRequest $request, PaymentMethod $paymentMethod) : *JsonResponse*
- **destroy**(Request $request, PaymentMethod $paymentMethod) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\PaymentMethod\StorePaymentMethodRequest;
use App\Http\Requests\Api\PaymentMethod\UpdatePaymentMethodRequest;
use App\Http\Resources\PaymentMethodResource;
use App\Models\PaymentMethod;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('payment_methods.view'), 403);

        $rows = PaymentMethod::query()
            ->withCount('payments')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('code', 'like', "%{$search}%")
                        ->orWhere('name', 'like', "%{$search}%")
                        ->orWhere('type', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('type'), function ($query) use ($request) {
                $query->where('type', $request->string('type')->toString());
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar metode pembayaran berhasil diambil.',
            'data' => PaymentMethodResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StorePaymentMethodRequest $request): JsonResponse
    {
        $row = PaymentMethod::create($request->validated());

        return response()->json([
            'message' => 'Metode pembayaran berhasil dibuat.',
            'data' => new PaymentMethodResource($row),
        ], 201);
    }

    public function show(Request $request, PaymentMethod $paymentMethod): JsonResponse
    {
        abort_unless($request->user()->can('payment_methods.view'), 403);

        return response()->json([
            'message' => 'Detail metode pembayaran berhasil diambil.',
            'data' => new PaymentMethodResource($paymentMethod->loadCount('payments')),
        ]);
    }

    public function update(UpdatePaymentMethodRequest $request, PaymentMethod $paymentMethod): JsonResponse
    {
        $paymentMethod->update($request->validated());

        return response()->json([
            'message' => 'Metode pembayaran berhasil diupdate.',
            'data' => new PaymentMethodResource($paymentMethod->fresh()->loadCount('payments')),
        ]);
    }

    public function destroy(Request $request, PaymentMethod $paymentMethod): JsonResponse
    {
        abort_unless($request->user()->can('payment_methods.delete'), 403);

        if ($paymentMethod->payments()->exists()) {
            return response()->json([
                'message' => 'Metode pembayaran tidak bisa dihapus karena sudah dipakai transaksi.',
            ], 422);
        }

        $paymentMethod->delete();

        return response()->json([
            'message' => 'Metode pembayaran berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapipermissioncontrollerphp"></a>
### app\Http\Controllers\Api\PermissionController.php
- SHA: `1951779b0d55`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `PermissionController` extends `Controller`**

Metode Publik:
- **index**(Request $request) : *JsonResponse*
- **store**(StorePermissionRequest $request) : *JsonResponse*
- **show**(Request $request, Permission $permission) : *JsonResponse*
- **update**(UpdatePermissionRequest $request, Permission $permission) : *JsonResponse*
- **destroy**(Request $request, Permission $permission) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Permission\StorePermissionRequest;
use App\Http\Requests\Api\Permission\UpdatePermissionRequest;
use App\Http\Resources\PermissionResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('permissions.view'), 403);

        $permissions = Permission::query()
            ->latest('id')
            ->paginate((int) $request->input('per_page', 20));

        return response()->json([
            'message' => 'Daftar permission berhasil diambil.',
            'data' => PermissionResource::collection($permissions),
            'meta' => [
                'current_page' => $permissions->currentPage(),
                'last_page' => $permissions->lastPage(),
                'per_page' => $permissions->perPage(),
                'total' => $permissions->total(),
            ],
        ]);
    }

    public function store(StorePermissionRequest $request): JsonResponse
    {
        $permission = Permission::create([
            'name' => $request->string('name')->toString(),
            'guard_name' => 'sanctum',
        ]);

        return response()->json([
            'message' => 'Permission berhasil dibuat.',
            'data' => new PermissionResource($permission),
        ], 201);
    }

    public function show(Request $request, Permission $permission): JsonResponse
    {
        abort_unless($request->user()->can('permissions.view'), 403);

        return response()->json([
            'message' => 'Detail permission berhasil diambil.',
            'data' => new PermissionResource($permission),
        ]);
    }

    public function update(UpdatePermissionRequest $request, Permission $permission): JsonResponse
    {
        $permission->update([
            'name' => $request->string('name')->toString(),
        ]);

        return response()->json([
            'message' => 'Permission berhasil diupdate.',
            'data' => new PermissionResource($permission),
        ]);
    }

    public function destroy(Request $request, Permission $permission): JsonResponse
    {
        abort_unless($request->user()->can('permissions.delete'), 403);

        $permission->delete();

        return response()->json([
            'message' => 'Permission berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapiproductbomcontrollerphp"></a>
### app\Http\Controllers\Api\ProductBomController.php
- SHA: `d3328e84ea76`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `ProductBomController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly ProductBomService $productBomService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreProductBomRequest $request) : *JsonResponse*
- **show**(Request $request, ProductBom $productBom) : *JsonResponse*
- **update**(UpdateProductBomRequest $request, ProductBom $productBom) : *JsonResponse*
- **destroy**(Request $request, ProductBom $productBom) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\ProductBom\StoreProductBomRequest;
use App\Http\Requests\Api\Inventory\ProductBom\UpdateProductBomRequest;
use App\Http\Resources\ProductBomResource;
use App\Models\ProductBom;
use App\Services\Inventory\ProductBomService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductBomController extends Controller
{
    public function __construct(
        private readonly ProductBomService $productBomService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('product_boms.view'), 403);

        $rows = ProductBom::query()
            ->with(['product', 'items.rawMaterial', 'items.unit'])
            ->when($request->filled('product_id'), function ($query) use ($request) {
                $query->where('product_id', (int) $request->input('product_id'));
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->orderByDesc('version')
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar BOM berhasil diambil.',
            'data' => ProductBomResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreProductBomRequest $request): JsonResponse
    {
        $row = $this->productBomService->create($request->validated());

        return response()->json([
            'message' => 'BOM berhasil dibuat.',
            'data' => new ProductBomResource($row),
        ], 201);
    }

    public function show(Request $request, ProductBom $productBom): JsonResponse
    {
        abort_unless($request->user()->can('product_boms.view'), 403);

        return response()->json([
            'message' => 'Detail BOM berhasil diambil.',
            'data' => new ProductBomResource($productBom->load(['product', 'items.rawMaterial', 'items.unit'])),
        ]);
    }

    public function update(UpdateProductBomRequest $request, ProductBom $productBom): JsonResponse
    {
        $row = $this->productBomService->update($productBom, $request->validated());

        return response()->json([
            'message' => 'BOM berhasil diupdate.',
            'data' => new ProductBomResource($row),
        ]);
    }

    public function destroy(Request $request, ProductBom $productBom): JsonResponse
    {
        abort_unless($request->user()->can('product_boms.delete'), 403);

        $productBom->delete();

        return response()->json([
            'message' => 'BOM berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapiproductcategorycontrollerphp"></a>
### app\Http\Controllers\Api\ProductCategoryController.php
- SHA: `59363377219b`  
- Ukuran: 4 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `ProductCategoryController` extends `Controller`**

Metode Publik:
- **index**(Request $request) : *JsonResponse*
- **store**(StoreProductCategoryRequest $request) : *JsonResponse*
- **show**(Request $request, ProductCategory $productCategory) : *JsonResponse*
- **update**(UpdateProductCategoryRequest $request, ProductCategory $productCategory) : *JsonResponse*
- **destroy**(Request $request, ProductCategory $productCategory) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ProductCategory\StoreProductCategoryRequest;
use App\Http\Requests\Api\ProductCategory\UpdateProductCategoryRequest;
use App\Http\Resources\ProductCategoryResource;
use App\Models\ProductCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('product_categories.view'), 403);

        $categories = ProductCategory::query()
            ->withCount('products')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('slug', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->orderBy('sort_order')
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar kategori produk berhasil diambil.',
            'data' => ProductCategoryResource::collection($categories),
            'meta' => [
                'current_page' => $categories->currentPage(),
                'last_page' => $categories->lastPage(),
                'per_page' => $categories->perPage(),
                'total' => $categories->total(),
            ],
        ]);
    }

    public function store(StoreProductCategoryRequest $request): JsonResponse
    {
        $payload = $request->validated();

        if (empty($payload['slug'] ?? null) && !empty($payload['name'])) {
            $payload['slug'] = Str::slug($payload['name']);
        }

        $category = ProductCategory::create($payload);

        return response()->json([
            'message' => 'Kategori produk berhasil dibuat.',
            'data' => new ProductCategoryResource($category),
        ], 201);
    }

    public function show(Request $request, ProductCategory $productCategory): JsonResponse
    {
        abort_unless($request->user()->can('product_categories.view'), 403);

        return response()->json([
            'message' => 'Detail kategori produk berhasil diambil.',
            'data' => new ProductCategoryResource($productCategory->loadCount('products')),
        ]);
    }

    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory): JsonResponse
    {
        $payload = $request->validated();

        if (array_key_exists('name', $payload) && empty($payload['slug'] ?? null)) {
            $payload['slug'] = Str::slug($payload['name']);
        }

        $productCategory->update($payload);

        return response()->json([
            'message' => 'Kategori produk berhasil diupdate.',
            'data' => new ProductCategoryResource($productCategory->fresh()->loadCount('products')),
        ]);
    }

    public function destroy(Request $request, ProductCategory $productCategory): JsonResponse
    {
        abort_unless($request->user()->can('product_categories.delete'), 403);

        if ($productCategory->products()->exists()) {
            return response()->json([
                'message' => 'Kategori tidak bisa dihapus karena masih dipakai produk.',
            ], 422);
        }

        $productCategory->delete();

        return response()->json([
            'message' => 'Kategori produk berhasil dihapus.',
        ]);
    }
}
```
</details>

<a id="file-apphttpcontrollersapiproductcontrollerphp"></a>
### app\Http\Controllers\Api\ProductController.php
- SHA: `00cbdfa6c312`  
- Ukuran: 4 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `ProductController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly ProductService $productService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreProductRequest $request) : *JsonResponse*
- **show**(Request $request, Product $product) : *JsonResponse*
- **update**(UpdateProductRequest $request, Product $product) : *JsonResponse*
- **destroy**(Request $request, Product $product) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Product\StoreProductRequest;
use App\Http\Requests\Api\Product\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Services\Catalog\ProductService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct(
        private readonly ProductService $productService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('products.view'), 403);

        $products = Product::query()
            ->with([
                'category',
                'prices.outlet',
                'outletStatuses.outlet',
                'variantGroups.options',
                'modifierGroups.options',
                'bundleItems.bundledProduct',
            ])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('sku', 'like', "%{$search}%")
                        ->orWhere('code', 'like', "%{$search}%")
                        ->orWhere('slug', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('product_category_id'), function ($query) use ($request) {
                $query->where('product_category_id', (int) $request->input('product_category_id'));
            })
            ->when($request->filled('product_type'), function ($query) use ($request) {
                $query->where('product_type', $request->string('product_type')->toString());
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar produk berhasil diambil.',
            'data' => ProductResource::collection($products),
            'meta' => [
                'current_page' => $products->currentPage(),
                'last_page' => $products->lastPage(),
                'per_page' => $products->perPage(),
                'total' => $products->total(),
            ],
        ]);
    }

    public function store(StoreProductRequest $request): JsonResponse
    {
        $payload = $request->validated();

        if (empty($payload['slug'] ?? null) && !empty($payload['name'])) {
            $payload['slug'] = Str::slug($payload['name']);
        }

        $product = $this->productService->create($payload);

        return response()->json([
            'message' => 'Produk berhasil dibuat.',
            'data' => new ProductResource($product),
        ], 201);
    }

    public function show(Request $request, Product $product): JsonResponse
    {
        abort_unless($request->user()->can('products.view'), 403);

        return response()->json([
            'message' => 'Detail produk berhasil diambil.',
            'data' => new ProductResource($product->load([
                'category',
                'prices.outlet',
                'outletStatuses.outlet',
                'variantGroups.options',
                'modifierGroups.options',
                'bundleItems.bundledProduct',
            ])),
        ]);
    }

    public function update(UpdateProductRequest $request, Product $product): JsonResponse
    {
        $payload = $request->validated();

        if (array_key_exists('name', $payload) && empty($payload['slug'] ?? null)) {
            $payload['slug'] = Str::slug($payload['name']);
        }

        $product = $this->productService->update($product, $payload);

        return response()->json([
            'message' => 'Produk berhasil diupdate.',
            'data' => new ProductResource($product),
        ]);
    }

    public function destroy(Request $request, Product $product): JsonResponse
    {
        abort_unless($request->user()->can('products.delete'), 403);

        $product->delete();

        return response()->json([
            'message' => 'Produk berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapipromotioncontrollerphp"></a>
### app\Http\Controllers\Api\PromotionController.php
- SHA: `3c349b2d6fa9`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `PromotionController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly PromotionService $promotionService)
- **index**(Request $request) : *JsonResponse*
- **store**(StorePromotionRequest $request) : *JsonResponse*
- **show**(Request $request, Promotion $promotion) : *JsonResponse*
- **update**(UpdatePromotionRequest $request, Promotion $promotion) : *JsonResponse*
- **destroy**(Request $request, Promotion $promotion) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Promotion\StorePromotionRequest;
use App\Http\Requests\Api\Promotion\UpdatePromotionRequest;
use App\Http\Resources\PromotionResource;
use App\Models\Promotion;
use App\Services\Promotion\PromotionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function __construct(
        private readonly PromotionService $promotionService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('promotions.view'), 403);

        $promotions = Promotion::query()
            ->with('rules')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where('name', 'like', "%{$search}%");
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->when($request->filled('promotion_type'), function ($query) use ($request) {
                $query->where('promotion_type', $request->string('promotion_type')->toString());
            })
            ->orderByDesc('priority')
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar promotion berhasil diambil.',
            'data' => PromotionResource::collection($promotions),
            'meta' => [
                'current_page' => $promotions->currentPage(),
                'last_page' => $promotions->lastPage(),
                'per_page' => $promotions->perPage(),
                'total' => $promotions->total(),
            ],
        ]);
    }

    public function store(StorePromotionRequest $request): JsonResponse
    {
        $promotion = $this->promotionService->create($request->validated());

        return response()->json([
            'message' => 'Promotion berhasil dibuat.',
            'data' => new PromotionResource($promotion),
        ], 201);
    }

    public function show(Request $request, Promotion $promotion): JsonResponse
    {
        abort_unless($request->user()->can('promotions.view'), 403);

        return response()->json([
            'message' => 'Detail promotion berhasil diambil.',
            'data' => new PromotionResource($promotion->load('rules')),
        ]);
    }

    public function update(UpdatePromotionRequest $request, Promotion $promotion): JsonResponse
    {
        $promotion = $this->promotionService->update($promotion, $request->validated());

        return response()->json([
            'message' => 'Promotion berhasil diupdate.',
            'data' => new PromotionResource($promotion),
        ]);
    }

    public function destroy(Request $request, Promotion $promotion): JsonResponse
    {
        abort_unless($request->user()->can('promotions.delete'), 403);

        $promotion->delete();

        return response()->json([
            'message' => 'Promotion berhasil dihapus.',
        ]);
    }
}
```
</details>

<a id="file-apphttpcontrollersapipurchaseordercontrollerphp"></a>
### app\Http\Controllers\Api\PurchaseOrderController.php
- SHA: `ae31ac2584d6`  
- Ukuran: 5 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `PurchaseOrderController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly PurchaseOrderService $purchaseOrderService)
- **index**(Request $request) : *JsonResponse*
- **store**(StorePurchaseOrderRequest $request) : *JsonResponse*
- **show**(Request $request, PurchaseOrder $purchaseOrder) : *JsonResponse*
- **update**(UpdatePurchaseOrderRequest $request, PurchaseOrder $purchaseOrder) : *JsonResponse*
- **approve**(Request $request, PurchaseOrder $purchaseOrder) : *JsonResponse*
- **cancel**(Request $request, PurchaseOrder $purchaseOrder) : *JsonResponse*
- **destroy**(Request $request, PurchaseOrder $purchaseOrder) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Purchasing\PurchaseOrder\StorePurchaseOrderRequest;
use App\Http\Requests\Api\Purchasing\PurchaseOrder\UpdatePurchaseOrderRequest;
use App\Http\Resources\PurchaseOrderResource;
use App\Models\PurchaseOrder;
use App\Services\Purchasing\PurchaseOrderService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function __construct(
        private readonly PurchaseOrderService $purchaseOrderService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('purchase_orders.view'), 403);

        $rows = PurchaseOrder::query()
            ->with([
                'outlet',
                'supplier',
                'approver',
                'creator',
                'items.rawMaterial',
                'items.unit',
            ])
            ->withCount('goodsReceipts')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('po_number', 'like', "%{$search}%")
                        ->orWhereHas('supplier', fn ($sq) => $sq->where('name', 'like', "%{$search}%"))
                        ->orWhereHas('outlet', fn ($oq) => $oq->where('name', 'like', "%{$search}%"));
                });
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('supplier_id'), function ($query) use ($request) {
                $query->where('supplier_id', (int) $request->input('supplier_id'));
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->string('status')->toString());
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar purchase order berhasil diambil.',
            'data' => PurchaseOrderResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StorePurchaseOrderRequest $request): JsonResponse
    {
        $row = $this->purchaseOrderService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Purchase order berhasil dibuat.',
            'data' => new PurchaseOrderResource($row),
        ], 201);
    }

    public function show(Request $request, PurchaseOrder $purchaseOrder): JsonResponse
    {
        abort_unless($request->user()->can('purchase_orders.view'), 403);

        return response()->json([
            'message' => 'Detail purchase order berhasil diambil.',
            'data' => new PurchaseOrderResource($purchaseOrder->load([
                'outlet',
                'supplier',
                'approver',
                'creator',
                'items.rawMaterial',
                'items.unit',
            ])->loadCount('goodsReceipts')),
        ]);
    }

    public function update(UpdatePurchaseOrderRequest $request, PurchaseOrder $purchaseOrder): JsonResponse
    {
        $row = $this->purchaseOrderService->update($purchaseOrder, $request->validated());

        return response()->json([
            'message' => 'Purchase order berhasil diupdate.',
            'data' => new PurchaseOrderResource($row),
        ]);
    }

    public function approve(Request $request, PurchaseOrder $purchaseOrder): JsonResponse
    {
        abort_unless($request->user()->can('purchase_orders.approve'), 403);

        $row = $this->purchaseOrderService->approve($purchaseOrder, $request->user()->id);

        return response()->json([
            'message' => 'Purchase order berhasil di-approve.',
            'data' => new PurchaseOrderResource($row),
        ]);
    }

    public function cancel(Request $request, PurchaseOrder $purchaseOrder): JsonResponse
    {
        abort_unless($request->user()->can('purchase_orders.cancel'), 403);

        $row = $this->purchaseOrderService->cancel($purchaseOrder);

        return response()->json([
            'message' => 'Purchase order berhasil dibatalkan.',
            'data' => new PurchaseOrderResource($row),
        ]);
    }

    public function destroy(Request $request, PurchaseOrder $purchaseOrder): JsonResponse
    {
        abort_unless($request->user()->can('purchase_orders.delete'), 403);

        if ($purchaseOrder->goodsReceipts()->exists()) {
            return response()->json([
                'message' => 'Purchase order tidak bisa dihapus karena sudah memiliki goods receipt.',
            ], 422);
        }

        if ($purchaseOrder->status !== 'draft') {
            return response()->json([
                'message' => 'Hanya purchase order draft yang boleh dihapus.',
            ], 422);
        }

        $purchaseOrder->delete();

        return response()->json([
            'message' => 'Purchase order berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapirawmaterialcategorycontrollerphp"></a>
### app\Http\Controllers\Api\RawMaterialCategoryController.php
- SHA: `a35bbe55eac8`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `RawMaterialCategoryController` extends `Controller`**

Metode Publik:
- **index**(Request $request) : *JsonResponse*
- **store**(StoreRawMaterialCategoryRequest $request) : *JsonResponse*
- **show**(Request $request, RawMaterialCategory $rawMaterialCategory) : *JsonResponse*
- **update**(UpdateRawMaterialCategoryRequest $request, RawMaterialCategory $rawMaterialCategory) : *JsonResponse*
- **destroy**(Request $request, RawMaterialCategory $rawMaterialCategory) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\RawMaterialCategory\StoreRawMaterialCategoryRequest;
use App\Http\Requests\Api\Inventory\RawMaterialCategory\UpdateRawMaterialCategoryRequest;
use App\Http\Resources\RawMaterialCategoryResource;
use App\Models\RawMaterialCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RawMaterialCategoryController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('raw_material_categories.view'), 403);

        $rows = RawMaterialCategory::query()
            ->withCount('rawMaterials')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();
                $query->where('name', 'like', "%{$search}%");
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar kategori bahan baku berhasil diambil.',
            'data' => RawMaterialCategoryResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreRawMaterialCategoryRequest $request): JsonResponse
    {
        $row = RawMaterialCategory::create($request->validated());

        return response()->json([
            'message' => 'Kategori bahan baku berhasil dibuat.',
            'data' => new RawMaterialCategoryResource($row),
        ], 201);
    }

    public function show(Request $request, RawMaterialCategory $rawMaterialCategory): JsonResponse
    {
        abort_unless($request->user()->can('raw_material_categories.view'), 403);

        return response()->json([
            'message' => 'Detail kategori bahan baku berhasil diambil.',
            'data' => new RawMaterialCategoryResource($rawMaterialCategory->loadCount('rawMaterials')),
        ]);
    }

    public function update(UpdateRawMaterialCategoryRequest $request, RawMaterialCategory $rawMaterialCategory): JsonResponse
    {
        $rawMaterialCategory->update($request->validated());

        return response()->json([
            'message' => 'Kategori bahan baku berhasil diupdate.',
            'data' => new RawMaterialCategoryResource($rawMaterialCategory->fresh()->loadCount('rawMaterials')),
        ]);
    }

    public function destroy(Request $request, RawMaterialCategory $rawMaterialCategory): JsonResponse
    {
        abort_unless($request->user()->can('raw_material_categories.delete'), 403);

        if ($rawMaterialCategory->rawMaterials()->exists()) {
            return response()->json([
                'message' => 'Kategori bahan baku tidak bisa dihapus karena masih dipakai.',
            ], 422);
        }

        $rawMaterialCategory->delete();

        return response()->json([
            'message' => 'Kategori bahan baku berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapirawmaterialcontrollerphp"></a>
### app\Http\Controllers\Api\RawMaterialController.php
- SHA: `89b3fe24260a`  
- Ukuran: 4 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `RawMaterialController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly RawMaterialService $rawMaterialService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreRawMaterialRequest $request) : *JsonResponse*
- **show**(Request $request, RawMaterial $rawMaterial) : *JsonResponse*
- **update**(UpdateRawMaterialRequest $request, RawMaterial $rawMaterial) : *JsonResponse*
- **destroy**(Request $request, RawMaterial $rawMaterial) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\RawMaterial\StoreRawMaterialRequest;
use App\Http\Requests\Api\Inventory\RawMaterial\UpdateRawMaterialRequest;
use App\Http\Resources\RawMaterialResource;
use App\Models\RawMaterial;
use App\Services\Inventory\RawMaterialService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RawMaterialController extends Controller
{
    public function __construct(
        private readonly RawMaterialService $rawMaterialService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('raw_materials.view'), 403);

        $rows = RawMaterial::query()
            ->with(['category', 'unit', 'outletStocks.outlet'])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('code', 'like', "%{$search}%")
                        ->orWhere('sku', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('raw_material_category_id'), function ($query) use ($request) {
                $query->where('raw_material_category_id', (int) $request->input('raw_material_category_id'));
            })
            ->when($request->filled('unit_id'), function ($query) use ($request) {
                $query->where('unit_id', (int) $request->input('unit_id'));
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar bahan baku berhasil diambil.',
            'data' => RawMaterialResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreRawMaterialRequest $request): JsonResponse
    {
        $row = $this->rawMaterialService->create($request->validated());

        return response()->json([
            'message' => 'Bahan baku berhasil dibuat.',
            'data' => new RawMaterialResource($row),
        ], 201);
    }

    public function show(Request $request, RawMaterial $rawMaterial): JsonResponse
    {
        abort_unless($request->user()->can('raw_materials.view'), 403);

        return response()->json([
            'message' => 'Detail bahan baku berhasil diambil.',
            'data' => new RawMaterialResource($rawMaterial->load(['category', 'unit', 'outletStocks.outlet'])),
        ]);
    }

    public function update(UpdateRawMaterialRequest $request, RawMaterial $rawMaterial): JsonResponse
    {
        $row = $this->rawMaterialService->update($rawMaterial, $request->validated());

        return response()->json([
            'message' => 'Bahan baku berhasil diupdate.',
            'data' => new RawMaterialResource($row),
        ]);
    }

    public function destroy(Request $request, RawMaterial $rawMaterial): JsonResponse
    {
        abort_unless($request->user()->can('raw_materials.delete'), 403);

        if ($rawMaterial->bomItems()->exists()) {
            return response()->json([
                'message' => 'Bahan baku tidak bisa dihapus karena sudah dipakai di BOM.',
            ], 422);
        }

        $rawMaterial->delete();

        return response()->json([
            'message' => 'Bahan baku berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapireportcontrollerphp"></a>
### app\Http\Controllers\Api\ReportController.php
- SHA: `414a6cb6e41e`  
- Ukuran: 4 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `ReportController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly ReportingService $reportingService)
- **salesSummary**(ReportFilterRequest $request) : *JsonResponse*
- **salesTrend**(ReportFilterRequest $request) : *JsonResponse*
- **salesByOutlet**(ReportFilterRequest $request) : *JsonResponse*
- **salesByCashier**(ReportFilterRequest $request) : *JsonResponse*
- **topProducts**(ReportFilterRequest $request) : *JsonResponse*
- **paymentSummary**(ReportFilterRequest $request) : *JsonResponse*
- **promoUsage**(ReportFilterRequest $request) : *JsonResponse*
- **voidRefund**(ReportFilterRequest $request) : *JsonResponse*
- **lowStocks**(ReportFilterRequest $request) : *JsonResponse*
- **purchaseMaterials**(ReportFilterRequest $request) : *JsonResponse*
- **expenses**(ReportFilterRequest $request) : *JsonResponse*
- **shiftSummary**(ReportFilterRequest $request) : *JsonResponse*
- **orderDetails**(ReportFilterRequest $request) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Report\ReportFilterRequest;
use App\Services\Report\ReportingService;
use Illuminate\Http\JsonResponse;

class ReportController extends Controller
{
    public function __construct(
        private readonly ReportingService $reportingService
    ) {
    }

    public function salesSummary(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Ringkasan penjualan berhasil diambil.',
            'data' => $this->reportingService->salesSummary($request->validated()),
        ]);
    }

    public function salesTrend(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Tren penjualan berhasil diambil.',
            'data' => $this->reportingService->salesTrend($request->validated()),
        ]);
    }

    public function salesByOutlet(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Laporan penjualan per outlet berhasil diambil.',
            'data' => $this->reportingService->salesByOutlet($request->validated()),
        ]);
    }

    public function salesByCashier(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Laporan penjualan per kasir berhasil diambil.',
            'data' => $this->reportingService->salesByCashier($request->validated()),
        ]);
    }

    public function topProducts(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Laporan produk terlaris berhasil diambil.',
            'data' => $this->reportingService->topProducts($request->validated()),
        ]);
    }

    public function paymentSummary(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Ringkasan pembayaran berhasil diambil.',
            'data' => $this->reportingService->paymentSummary($request->validated()),
        ]);
    }

    public function promoUsage(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Laporan pemakaian promo berhasil diambil.',
            'data' => $this->reportingService->promoUsage($request->validated()),
        ]);
    }

    public function voidRefund(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Laporan void/refund berhasil diambil.',
            'data' => $this->reportingService->voidRefund($request->validated()),
        ]);
    }

    public function lowStocks(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Laporan stok menipis berhasil diambil.',
            'data' => $this->reportingService->lowStocks($request->validated()),
        ]);
    }

    public function purchaseMaterials(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Laporan pembelian bahan berhasil diambil.',
            'data' => $this->reportingService->purchaseMaterials($request->validated()),
        ]);
    }

    public function expenses(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Laporan pengeluaran outlet berhasil diambil.',
            'data' => $this->reportingService->expenses($request->validated()),
        ]);
    }

    public function shiftSummary(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Rekap shift kasir berhasil diambil.',
            'data' => $this->reportingService->shiftSummary($request->validated()),
        ]);
    }

    public function orderDetails(ReportFilterRequest $request): JsonResponse
    {
        $rows = $this->reportingService->orderDetails($request->validated());

        return response()->json([
            'message' => 'Detail laporan order berhasil diambil.',
            'data' => $rows->items(),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapirolecontrollerphp"></a>
### app\Http\Controllers\Api\RoleController.php
- SHA: `97504ea623be`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `RoleController` extends `Controller`**

Metode Publik:
- **index**(Request $request) : *JsonResponse*
- **store**(StoreRoleRequest $request) : *JsonResponse*
- **show**(Request $request, Role $role) : *JsonResponse*
- **update**(UpdateRoleRequest $request, Role $role) : *JsonResponse*
- **destroy**(Request $request, Role $role) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Role\StoreRoleRequest;
use App\Http\Requests\Api\Role\UpdateRoleRequest;
use App\Http\Resources\RoleResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('roles.view'), 403);

        $roles = Role::query()
            ->with('permissions')
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar role berhasil diambil.',
            'data' => RoleResource::collection($roles),
            'meta' => [
                'current_page' => $roles->currentPage(),
                'last_page' => $roles->lastPage(),
                'per_page' => $roles->perPage(),
                'total' => $roles->total(),
            ],
        ]);
    }

    public function store(StoreRoleRequest $request): JsonResponse
    {
        $role = Role::create([
            'name' => $request->string('name')->toString(),
            'guard_name' => 'sanctum',
        ]);

        $role->syncPermissions($request->input('permissions', []));

        return response()->json([
            'message' => 'Role berhasil dibuat.',
            'data' => new RoleResource($role->load('permissions')),
        ], 201);
    }

    public function show(Request $request, Role $role): JsonResponse
    {
        abort_unless($request->user()->can('roles.view'), 403);

        return response()->json([
            'message' => 'Detail role berhasil diambil.',
            'data' => new RoleResource($role->load('permissions')),
        ]);
    }

    public function update(UpdateRoleRequest $request, Role $role): JsonResponse
    {
        $role->update([
            'name' => $request->string('name')->toString(),
        ]);

        $role->syncPermissions($request->input('permissions', []));

        return response()->json([
            'message' => 'Role berhasil diupdate.',
            'data' => new RoleResource($role->load('permissions')),
        ]);
    }

    public function destroy(Request $request, Role $role): JsonResponse
    {
        abort_unless($request->user()->can('roles.delete'), 403);

        if ($role->name === 'superadmin') {
            return response()->json([
                'message' => 'Role superadmin tidak boleh dihapus.',
            ], 422);
        }

        $role->delete();

        return response()->json([
            'message' => 'Role berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapistockadjustmentcontrollerphp"></a>
### app\Http\Controllers\Api\StockAdjustmentController.php
- SHA: `0a2b177be6fe`  
- Ukuran: 4 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `StockAdjustmentController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly StockAdjustmentService $stockAdjustmentService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreStockAdjustmentRequest $request) : *JsonResponse*
- **show**(Request $request, StockAdjustment $stockAdjustment) : *JsonResponse*
- **update**(UpdateStockAdjustmentRequest $request, StockAdjustment $stockAdjustment) : *JsonResponse*
- **destroy**(Request $request, StockAdjustment $stockAdjustment) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\StockAdjustment\StoreStockAdjustmentRequest;
use App\Http\Requests\Api\Inventory\StockAdjustment\UpdateStockAdjustmentRequest;
use App\Http\Resources\StockAdjustmentResource;
use App\Models\StockAdjustment;
use App\Services\Inventory\StockAdjustmentService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StockAdjustmentController extends Controller
{
    public function __construct(
        private readonly StockAdjustmentService $stockAdjustmentService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('stock_adjustments.view'), 403);

        $rows = StockAdjustment::query()
            ->with(['outlet', 'creator', 'approver', 'items.rawMaterial', 'items.unit'])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('adjustment_number', 'like', "%{$search}%")
                        ->orWhere('reason', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('reason'), function ($query) use ($request) {
                $query->where('reason', $request->string('reason')->toString());
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar stock adjustment berhasil diambil.',
            'data' => StockAdjustmentResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreStockAdjustmentRequest $request): JsonResponse
    {
        $row = $this->stockAdjustmentService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Stock adjustment berhasil dibuat.',
            'data' => new StockAdjustmentResource($row),
        ], 201);
    }

    public function show(Request $request, StockAdjustment $stockAdjustment): JsonResponse
    {
        abort_unless($request->user()->can('stock_adjustments.view'), 403);

        return response()->json([
            'message' => 'Detail stock adjustment berhasil diambil.',
            'data' => new StockAdjustmentResource($stockAdjustment->load(['outlet', 'creator', 'approver', 'items.rawMaterial', 'items.unit'])),
        ]);
    }

    public function update(UpdateStockAdjustmentRequest $request, StockAdjustment $stockAdjustment): JsonResponse
    {
        $row = $this->stockAdjustmentService->update($stockAdjustment, $request->validated());

        return response()->json([
            'message' => 'Stock adjustment berhasil diupdate.',
            'data' => new StockAdjustmentResource($row),
        ]);
    }

    public function destroy(Request $request, StockAdjustment $stockAdjustment): JsonResponse
    {
        abort_unless($request->user()->can('stock_adjustments.delete'), 403);

        $stockAdjustment->delete();

        return response()->json([
            'message' => 'Stock adjustment berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapistockmovementcontrollerphp"></a>
### app\Http\Controllers\Api\StockMovementController.php
- SHA: `fa75d402be28`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `StockMovementController` extends `Controller`**

Metode Publik:
- **index**(Request $request) : *JsonResponse*
- **show**(Request $request, StockMovement $stockMovement) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StockMovementResource;
use App\Models\StockMovement;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StockMovementController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('stock_movements.view'), 403);

        $rows = StockMovement::query()
            ->with(['outlet', 'creator', 'items.rawMaterial'])
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('movement_type'), function ($query) use ($request) {
                $query->where('movement_type', $request->string('movement_type')->toString());
            })
            ->when($request->filled('reference_type'), function ($query) use ($request) {
                $query->where('reference_type', $request->string('reference_type')->toString());
            })
            ->when($request->filled('reference_id'), function ($query) use ($request) {
                $query->where('reference_id', (int) $request->input('reference_id'));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar stock movement berhasil diambil.',
            'data' => StockMovementResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function show(Request $request, StockMovement $stockMovement): JsonResponse
    {
        abort_unless($request->user()->can('stock_movements.view'), 403);

        return response()->json([
            'message' => 'Detail stock movement berhasil diambil.',
            'data' => new StockMovementResource($stockMovement->load(['outlet', 'creator', 'items.rawMaterial'])),
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapistockopnamecontrollerphp"></a>
### app\Http\Controllers\Api\StockOpnameController.php
- SHA: `ada5f7d42edf`  
- Ukuran: 4 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `StockOpnameController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly StockOpnameService $stockOpnameService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreStockOpnameRequest $request) : *JsonResponse*
- **show**(Request $request, StockOpname $stockOpname) : *JsonResponse*
- **update**(UpdateStockOpnameRequest $request, StockOpname $stockOpname) : *JsonResponse*
- **post**(PostStockOpnameRequest $request, StockOpname $stockOpname) : *JsonResponse*
- **cancel**(Request $request, StockOpname $stockOpname) : *JsonResponse*
- **destroy**(Request $request, StockOpname $stockOpname) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\StockOpname\PostStockOpnameRequest;
use App\Http\Requests\Api\Inventory\StockOpname\StoreStockOpnameRequest;
use App\Http\Requests\Api\Inventory\StockOpname\UpdateStockOpnameRequest;
use App\Http\Resources\StockOpnameResource;
use App\Models\StockOpname;
use App\Services\Inventory\StockOpnameService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StockOpnameController extends Controller
{
    public function __construct(
        private readonly StockOpnameService $stockOpnameService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('stock_opnames.view'), 403);

        $rows = StockOpname::query()
            ->with(['outlet', 'creator', 'poster', 'items.rawMaterial', 'items.unit'])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where('opname_number', 'like', "%{$search}%");
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->string('status')->toString());
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar stock opname berhasil diambil.',
            'data' => StockOpnameResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreStockOpnameRequest $request): JsonResponse
    {
        $row = $this->stockOpnameService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Stock opname berhasil dibuat.',
            'data' => new StockOpnameResource($row),
        ], 201);
    }

    public function show(Request $request, StockOpname $stockOpname): JsonResponse
    {
        abort_unless($request->user()->can('stock_opnames.view'), 403);

        return response()->json([
            'message' => 'Detail stock opname berhasil diambil.',
            'data' => new StockOpnameResource($stockOpname->load(['outlet', 'creator', 'poster', 'items.rawMaterial', 'items.unit'])),
        ]);
    }

    public function update(UpdateStockOpnameRequest $request, StockOpname $stockOpname): JsonResponse
    {
        $row = $this->stockOpnameService->update($stockOpname, $request->validated());

        return response()->json([
            'message' => 'Stock opname berhasil diupdate.',
            'data' => new StockOpnameResource($row),
        ]);
    }

    public function post(PostStockOpnameRequest $request, StockOpname $stockOpname): JsonResponse
    {
        $row = $this->stockOpnameService->post(
            opname: $stockOpname->load('items'),
            userId: $request->user()->id,
            postedAt: $request->input('posted_at'),
        );

        return response()->json([
            'message' => 'Stock opname berhasil dipost.',
            'data' => new StockOpnameResource($row),
        ]);
    }

    public function cancel(Request $request, StockOpname $stockOpname): JsonResponse
    {
        abort_unless($request->user()->can('stock_opnames.cancel'), 403);

        $row = $this->stockOpnameService->cancel($stockOpname);

        return response()->json([
            'message' => 'Stock opname berhasil dibatalkan.',
            'data' => new StockOpnameResource($row),
        ]);
    }

    public function destroy(Request $request, StockOpname $stockOpname): JsonResponse
    {
        abort_unless($request->user()->can('stock_opnames.delete'), 403);

        if ($stockOpname->status !== 'draft') {
            return response()->json([
                'message' => 'Hanya stock opname draft yang boleh dihapus.',
            ], 422);
        }

        $stockOpname->delete();

        return response()->json([
            'message' => 'Stock opname berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapistocktransfercontrollerphp"></a>
### app\Http\Controllers\Api\StockTransferController.php
- SHA: `a13da1ec8a06`  
- Ukuran: 5 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `StockTransferController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly StockTransferService $stockTransferService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreStockTransferRequest $request) : *JsonResponse*
- **show**(Request $request, StockTransfer $stockTransfer) : *JsonResponse*
- **update**(UpdateStockTransferRequest $request, StockTransfer $stockTransfer) : *JsonResponse*
- **send**(SendStockTransferRequest $request, StockTransfer $stockTransfer) : *JsonResponse*
- **receive**(ReceiveStockTransferRequest $request, StockTransfer $stockTransfer) : *JsonResponse*
- **cancel**(Request $request, StockTransfer $stockTransfer) : *JsonResponse*
- **destroy**(Request $request, StockTransfer $stockTransfer) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\StockTransfer\ReceiveStockTransferRequest;
use App\Http\Requests\Api\Inventory\StockTransfer\SendStockTransferRequest;
use App\Http\Requests\Api\Inventory\StockTransfer\StoreStockTransferRequest;
use App\Http\Requests\Api\Inventory\StockTransfer\UpdateStockTransferRequest;
use App\Http\Resources\StockTransferResource;
use App\Models\StockTransfer;
use App\Services\Inventory\StockTransferService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StockTransferController extends Controller
{
    public function __construct(
        private readonly StockTransferService $stockTransferService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('stock_transfers.view'), 403);

        $rows = StockTransfer::query()
            ->with(['sourceOutlet', 'targetOutlet', 'creator', 'receiver', 'items.rawMaterial', 'items.unit'])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where('transfer_number', 'like', "%{$search}%");
            })
            ->when($request->filled('source_outlet_id'), function ($query) use ($request) {
                $query->where('source_outlet_id', (int) $request->input('source_outlet_id'));
            })
            ->when($request->filled('target_outlet_id'), function ($query) use ($request) {
                $query->where('target_outlet_id', (int) $request->input('target_outlet_id'));
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->string('status')->toString());
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar stock transfer berhasil diambil.',
            'data' => StockTransferResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreStockTransferRequest $request): JsonResponse
    {
        $row = $this->stockTransferService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Stock transfer berhasil dibuat.',
            'data' => new StockTransferResource($row),
        ], 201);
    }

    public function show(Request $request, StockTransfer $stockTransfer): JsonResponse
    {
        abort_unless($request->user()->can('stock_transfers.view'), 403);

        return response()->json([
            'message' => 'Detail stock transfer berhasil diambil.',
            'data' => new StockTransferResource($stockTransfer->load(['sourceOutlet', 'targetOutlet', 'creator', 'receiver', 'items.rawMaterial', 'items.unit'])),
        ]);
    }

    public function update(UpdateStockTransferRequest $request, StockTransfer $stockTransfer): JsonResponse
    {
        $row = $this->stockTransferService->update($stockTransfer, $request->validated());

        return response()->json([
            'message' => 'Stock transfer berhasil diupdate.',
            'data' => new StockTransferResource($row),
        ]);
    }

    public function send(SendStockTransferRequest $request, StockTransfer $stockTransfer): JsonResponse
    {
        $row = $this->stockTransferService->send(
            transfer: $stockTransfer->load('items'),
            sentAt: $request->input('sent_at'),
        );

        return response()->json([
            'message' => 'Stock transfer berhasil dikirim.',
            'data' => new StockTransferResource($row),
        ]);
    }

    public function receive(ReceiveStockTransferRequest $request, StockTransfer $stockTransfer): JsonResponse
    {
        $row = $this->stockTransferService->receive(
            transfer: $stockTransfer->load('items'),
            payload: $request->validated(),
            userId: $request->user()->id,
        );

        return response()->json([
            'message' => 'Stock transfer berhasil diterima.',
            'data' => new StockTransferResource($row),
        ]);
    }

    public function cancel(Request $request, StockTransfer $stockTransfer): JsonResponse
    {
        abort_unless($request->user()->can('stock_transfers.cancel'), 403);

        $row = $this->stockTransferService->cancel($stockTransfer);

        return response()->json([
            'message' => 'Stock transfer berhasil dibatalkan.',
            'data' => new StockTransferResource($row),
        ]);
    }

    public function destroy(Request $request, StockTransfer $stockTransfer): JsonResponse
    {
        abort_unless($request->user()->can('stock_transfers.delete'), 403);

        if ($stockTransfer->status !== 'draft') {
            return response()->json([
                'message' => 'Hanya stock transfer draft yang boleh dihapus.',
            ], 422);
        }

        $stockTransfer->delete();

        return response()->json([
            'message' => 'Stock transfer berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapisuppliercontrollerphp"></a>
### app\Http\Controllers\Api\SupplierController.php
- SHA: `681f5d0fd36f`  
- Ukuran: 4 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `SupplierController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly SupplierService $supplierService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreSupplierRequest $request) : *JsonResponse*
- **show**(Request $request, Supplier $supplier) : *JsonResponse*
- **update**(UpdateSupplierRequest $request, Supplier $supplier) : *JsonResponse*
- **destroy**(Request $request, Supplier $supplier) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Purchasing\Supplier\StoreSupplierRequest;
use App\Http\Requests\Api\Purchasing\Supplier\UpdateSupplierRequest;
use App\Http\Resources\SupplierResource;
use App\Models\Supplier;
use App\Services\Purchasing\SupplierService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function __construct(
        private readonly SupplierService $supplierService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('suppliers.view'), 403);

        $suppliers = Supplier::query()
            ->withCount('purchaseOrders')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('code', 'like', "%{$search}%")
                        ->orWhere('name', 'like', "%{$search}%")
                        ->orWhere('phone', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('city', 'like', "%{$search}%")
                        ->orWhere('contact_person', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar supplier berhasil diambil.',
            'data' => SupplierResource::collection($suppliers),
            'meta' => [
                'current_page' => $suppliers->currentPage(),
                'last_page' => $suppliers->lastPage(),
                'per_page' => $suppliers->perPage(),
                'total' => $suppliers->total(),
            ],
        ]);
    }

    public function store(StoreSupplierRequest $request): JsonResponse
    {
        $supplier = $this->supplierService->create($request->validated());

        return response()->json([
            'message' => 'Supplier berhasil dibuat.',
            'data' => new SupplierResource($supplier),
        ], 201);
    }

    public function show(Request $request, Supplier $supplier): JsonResponse
    {
        abort_unless($request->user()->can('suppliers.view'), 403);

        return response()->json([
            'message' => 'Detail supplier berhasil diambil.',
            'data' => new SupplierResource($supplier->loadCount('purchaseOrders')),
        ]);
    }

    public function update(UpdateSupplierRequest $request, Supplier $supplier): JsonResponse
    {
        $supplier = $this->supplierService->update($supplier, $request->validated());

        return response()->json([
            'message' => 'Supplier berhasil diupdate.',
            'data' => new SupplierResource($supplier),
        ]);
    }

    public function destroy(Request $request, Supplier $supplier): JsonResponse
    {
        abort_unless($request->user()->can('suppliers.delete'), 403);

        if ($supplier->purchaseOrders()->exists()) {
            return response()->json([
                'message' => 'Supplier tidak bisa dihapus karena sudah dipakai purchase order.',
            ], 422);
        }

        $supplier->delete();

        return response()->json([
            'message' => 'Supplier berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapisystemsettingcontrollerphp"></a>
### app\Http\Controllers\Api\SystemSettingController.php
- SHA: `b56a0cf65370`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `SystemSettingController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly SystemSettingService $systemSettingService)
- **index**(Request $request) : *JsonResponse*
- **upsert**(UpsertSystemSettingRequest $request) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\SystemSetting\UpsertSystemSettingRequest;
use App\Http\Resources\SystemSettingResource;
use App\Models\SystemSetting;
use App\Services\SystemSetting\SystemSettingService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SystemSettingController extends Controller
{
    public function __construct(
        private readonly SystemSettingService $systemSettingService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('system_settings.view'), 403);

        $settings = SystemSetting::query()
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();
                $query->where('key', 'like', "%{$search}%");
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 20));

        return response()->json([
            'message' => 'Daftar system setting berhasil diambil.',
            'data' => SystemSettingResource::collection($settings),
            'meta' => [
                'current_page' => $settings->currentPage(),
                'last_page' => $settings->lastPage(),
                'per_page' => $settings->perPage(),
                'total' => $settings->total(),
            ],
        ]);
    }

    public function upsert(UpsertSystemSettingRequest $request): JsonResponse
    {
        $items = $this->systemSettingService->upsertMany($request->validated('settings'));

        return response()->json([
            'message' => 'System setting berhasil disimpan.',
            'data' => SystemSettingResource::collection($items),
        ]);
    }
}
```
</details>

<a id="file-apphttpcontrollersapiunitcontrollerphp"></a>
### app\Http\Controllers\Api\UnitController.php
- SHA: `f54f6a5f523b`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `UnitController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly UnitService $unitService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreUnitRequest $request) : *JsonResponse*
- **show**(Request $request, Unit $unit) : *JsonResponse*
- **update**(UpdateUnitRequest $request, Unit $unit) : *JsonResponse*
- **destroy**(Request $request, Unit $unit) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\Unit\StoreUnitRequest;
use App\Http\Requests\Api\Inventory\Unit\UpdateUnitRequest;
use App\Http\Resources\UnitResource;
use App\Models\Unit;
use App\Services\Inventory\UnitService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function __construct(
        private readonly UnitService $unitService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('units.view'), 403);

        $units = Unit::query()
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('code', 'like', "%{$search}%");
                });
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar satuan berhasil diambil.',
            'data' => UnitResource::collection($units),
            'meta' => [
                'current_page' => $units->currentPage(),
                'last_page' => $units->lastPage(),
                'per_page' => $units->perPage(),
                'total' => $units->total(),
            ],
        ]);
    }

    public function store(StoreUnitRequest $request): JsonResponse
    {
        $unit = $this->unitService->create($request->validated());

        return response()->json([
            'message' => 'Satuan berhasil dibuat.',
            'data' => new UnitResource($unit),
        ], 201);
    }

    public function show(Request $request, Unit $unit): JsonResponse
    {
        abort_unless($request->user()->can('units.view'), 403);

        return response()->json([
            'message' => 'Detail satuan berhasil diambil.',
            'data' => new UnitResource($unit),
        ]);
    }

    public function update(UpdateUnitRequest $request, Unit $unit): JsonResponse
    {
        $unit = $this->unitService->update($unit, $request->validated());

        return response()->json([
            'message' => 'Satuan berhasil diupdate.',
            'data' => new UnitResource($unit),
        ]);
    }

    public function destroy(Request $request, Unit $unit): JsonResponse
    {
        abort_unless($request->user()->can('units.delete'), 403);

        if ($unit->rawMaterials()->exists() || $unit->bomItems()->exists()) {
            return response()->json([
                'message' => 'Satuan tidak bisa dihapus karena masih dipakai.',
            ], 422);
        }

        $unit->delete();

        return response()->json([
            'message' => 'Satuan berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapiunitconversioncontrollerphp"></a>
### app\Http\Controllers\Api\UnitConversionController.php
- SHA: `b5bcce73beea`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `UnitConversionController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly UnitConversionService $unitConversionService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreUnitConversionRequest $request) : *JsonResponse*
- **show**(Request $request, UnitConversion $unitConversion) : *JsonResponse*
- **update**(UpdateUnitConversionRequest $request, UnitConversion $unitConversion) : *JsonResponse*
- **destroy**(Request $request, UnitConversion $unitConversion) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\UnitConversion\StoreUnitConversionRequest;
use App\Http\Requests\Api\Inventory\UnitConversion\UpdateUnitConversionRequest;
use App\Http\Resources\UnitConversionResource;
use App\Models\UnitConversion;
use App\Services\Inventory\UnitConversionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UnitConversionController extends Controller
{
    public function __construct(
        private readonly UnitConversionService $unitConversionService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('unit_conversions.view'), 403);

        $rows = UnitConversion::query()
            ->with(['fromUnit', 'toUnit'])
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar konversi satuan berhasil diambil.',
            'data' => UnitConversionResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreUnitConversionRequest $request): JsonResponse
    {
        $row = $this->unitConversionService->create($request->validated());

        return response()->json([
            'message' => 'Konversi satuan berhasil dibuat.',
            'data' => new UnitConversionResource($row->load(['fromUnit', 'toUnit'])),
        ], 201);
    }

    public function show(Request $request, UnitConversion $unitConversion): JsonResponse
    {
        abort_unless($request->user()->can('unit_conversions.view'), 403);

        return response()->json([
            'message' => 'Detail konversi satuan berhasil diambil.',
            'data' => new UnitConversionResource($unitConversion->load(['fromUnit', 'toUnit'])),
        ]);
    }

    public function update(UpdateUnitConversionRequest $request, UnitConversion $unitConversion): JsonResponse
    {
        $unitConversion = $this->unitConversionService->update($unitConversion, $request->validated());

        return response()->json([
            'message' => 'Konversi satuan berhasil diupdate.',
            'data' => new UnitConversionResource($unitConversion->load(['fromUnit', 'toUnit'])),
        ]);
    }

    public function destroy(Request $request, UnitConversion $unitConversion): JsonResponse
    {
        abort_unless($request->user()->can('unit_conversions.delete'), 403);

        $unitConversion->delete();

        return response()->json([
            'message' => 'Konversi satuan berhasil dihapus.',
        ]);
    }
}

```
</details>

<a id="file-apphttpcontrollersapiusercontrollerphp"></a>
### app\Http\Controllers\Api\UserController.php
- SHA: `0ded1f7eab8c`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `UserController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly UserService $userService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreUserRequest $request) : *JsonResponse*
- **show**(Request $request, User $user) : *JsonResponse*
- **update**(UpdateUserRequest $request, User $user) : *JsonResponse*
- **destroy**(Request $request, User $user) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\User\StoreUserRequest;
use App\Http\Requests\Api\User\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\User\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(
        private readonly UserService $userService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('users.view'), 403);

        $users = User::query()
            ->with('roles', 'permissions', 'outletAccesses.outlet')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('phone', 'like', "%{$search}%")
                        ->orWhere('username', 'like', "%{$search}%");
                });
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar user berhasil diambil.',
            'data' => UserResource::collection($users),
            'meta' => [
                'current_page' => $users->currentPage(),
                'last_page' => $users->lastPage(),
                'per_page' => $users->perPage(),
                'total' => $users->total(),
            ],
        ]);
    }

    public function store(StoreUserRequest $request): JsonResponse
    {
        $user = $this->userService->create($request->validated());

        return response()->json([
            'message' => 'User berhasil dibuat.',
            'data' => new UserResource($user),
        ], 201);
    }

    public function show(Request $request, User $user): JsonResponse
    {
        abort_unless($request->user()->can('users.view'), 403);

        return response()->json([
            'message' => 'Detail user berhasil diambil.',
            'data' => new UserResource($user->load('roles', 'permissions', 'outletAccesses.outlet')),
        ]);
    }

    public function update(UpdateUserRequest $request, User $user): JsonResponse
    {
        $user = $this->userService->update($user, $request->validated());

        return response()->json([
            'message' => 'User berhasil diupdate.',
            'data' => new UserResource($user),
        ]);
    }

    public function destroy(Request $request, User $user): JsonResponse
    {
        abort_unless($request->user()->can('users.delete'), 403);

        if ($request->user()->id === $user->id) {
            return response()->json([
                'message' => 'User login aktif tidak boleh menonaktifkan dirinya sendiri.',
            ], 422);
        }

        $user->update([
            'is_active' => false,
        ]);

        return response()->json([
            'message' => 'User berhasil dinonaktifkan.',
        ]);
    }
}
```
</details>

<a id="file-apphttpcontrollersapivouchercontrollerphp"></a>
### app\Http\Controllers\Api\VoucherController.php
- SHA: `46bfbf68aa7e`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Controllers\Api`

**Class `VoucherController` extends `Controller`**

Metode Publik:
- **__construct**(private readonly VoucherService $voucherService)
- **index**(Request $request) : *JsonResponse*
- **store**(StoreVoucherRequest $request) : *JsonResponse*
- **show**(Request $request, Voucher $voucher) : *JsonResponse*
- **update**(UpdateVoucherRequest $request, Voucher $voucher) : *JsonResponse*
- **destroy**(Request $request, Voucher $voucher) : *JsonResponse*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Voucher\StoreVoucherRequest;
use App\Http\Requests\Api\Voucher\UpdateVoucherRequest;
use App\Http\Resources\VoucherResource;
use App\Models\Voucher;
use App\Services\Voucher\VoucherService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function __construct(
        private readonly VoucherService $voucherService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('vouchers.view'), 403);

        $vouchers = Voucher::query()
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('code', 'like', "%{$search}%")
                        ->orWhere('name', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->when($request->filled('discount_type'), function ($query) use ($request) {
                $query->where('discount_type', $request->string('discount_type')->toString());
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar voucher berhasil diambil.',
            'data' => VoucherResource::collection($vouchers),
            'meta' => [
                'current_page' => $vouchers->currentPage(),
                'last_page' => $vouchers->lastPage(),
                'per_page' => $vouchers->perPage(),
                'total' => $vouchers->total(),
            ],
        ]);
    }

    public function store(StoreVoucherRequest $request): JsonResponse
    {
        $voucher = $this->voucherService->create($request->validated());

        return response()->json([
            'message' => 'Voucher berhasil dibuat.',
            'data' => new VoucherResource($voucher),
        ], 201);
    }

    public function show(Request $request, Voucher $voucher): JsonResponse
    {
        abort_unless($request->user()->can('vouchers.view'), 403);

        return response()->json([
            'message' => 'Detail voucher berhasil diambil.',
            'data' => new VoucherResource($voucher),
        ]);
    }

    public function update(UpdateVoucherRequest $request, Voucher $voucher): JsonResponse
    {
        $voucher = $this->voucherService->update($voucher, $request->validated());

        return response()->json([
            'message' => 'Voucher berhasil diupdate.',
            'data' => new VoucherResource($voucher),
        ]);
    }

    public function destroy(Request $request, Voucher $voucher): JsonResponse
    {
        abort_unless($request->user()->can('vouchers.delete'), 403);

        $voucher->delete();

        return response()->json([
            'message' => 'Voucher berhasil dihapus.',
        ]);
    }
}
```
</details>

<a id="file-apphttpcontrollersauthauthenticatedsessioncontrollerphp"></a>
### app\Http\Controllers\Auth\AuthenticatedSessionController.php
- SHA: `d8ce0246f80f`  
- Ukuran: 834 B  
- Namespace: `App\Http\Controllers\Auth`

**Class `AuthenticatedSessionController` extends `Controller`**

Metode Publik:
- **store**(LoginRequest $request) : *Response* — Handle an incoming authentication request.
- **destroy**(Request $request) : *Response* — Handle an incoming authentication request.
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): Response
    {
        $request->authenticate();

        $request->session()->regenerate();

        return response()->noContent();
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): Response
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return response()->noContent();
    }
}

```
</details>

<a id="file-apphttpcontrollersauthemailverificationnotificationcontrollerphp"></a>
### app\Http\Controllers\Auth\EmailVerificationNotificationController.php
- SHA: `862143497e81`  
- Ukuran: 662 B  
- Namespace: `App\Http\Controllers\Auth`

**Class `EmailVerificationNotificationController` extends `Controller`**

Metode Publik:
- **store**(Request $request) : *JsonResponse|RedirectResponse* — Send a new email verification notification.
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended('/dashboard');
        }

        $request->user()->sendEmailVerificationNotification();

        return response()->json(['status' => 'verification-link-sent']);
    }
}

```
</details>

<a id="file-apphttpcontrollersauthnewpasswordcontrollerphp"></a>
### app\Http\Controllers\Auth\NewPasswordController.php
- SHA: `07cbf8776c39`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Controllers\Auth`

**Class `NewPasswordController` extends `Controller`**

Metode Publik:
- **store**(Request $request) : *JsonResponse* — Handle an incoming new password request.
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;

class NewPasswordController extends Controller
{
    /**
     * Handle an incoming new password request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->string('password')),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        if ($status != Password::PASSWORD_RESET) {
            throw ValidationException::withMessages([
                'email' => [__($status)],
            ]);
        }

        return response()->json(['status' => __($status)]);
    }
}

```
</details>

<a id="file-apphttpcontrollersauthpasswordresetlinkcontrollerphp"></a>
### app\Http\Controllers\Auth\PasswordResetLinkController.php
- SHA: `49a59b2d9259`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Controllers\Auth`

**Class `PasswordResetLinkController` extends `Controller`**

Metode Publik:
- **store**(Request $request) : *JsonResponse* — Handle an incoming password reset link request.
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class PasswordResetLinkController extends Controller
{
    /**
     * Handle an incoming password reset link request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status != Password::RESET_LINK_SENT) {
            throw ValidationException::withMessages([
                'email' => [__($status)],
            ]);
        }

        return response()->json(['status' => __($status)]);
    }
}

```
</details>

<a id="file-apphttpcontrollersauthregisteredusercontrollerphp"></a>
### app\Http\Controllers\Auth\RegisteredUserController.php
- SHA: `d22d8409db15`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Controllers\Auth`

**Class `RegisteredUserController` extends `Controller`**

Metode Publik:
- **store**(Request $request) : *Response* — Handle an incoming registration request.
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): Response
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->string('password')),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return response()->noContent();
    }
}

```
</details>

<a id="file-apphttpcontrollersauthverifyemailcontrollerphp"></a>
### app\Http\Controllers\Auth\VerifyEmailController.php
- SHA: `f499cd7498ce`  
- Ukuran: 854 B  
- Namespace: `App\Http\Controllers\Auth`

**Class `VerifyEmailController` extends `Controller`**

Metode Publik:
- **__invoke**(EmailVerificationRequest $request) : *RedirectResponse* — Mark the authenticated user's email address as verified.
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(
                config('app.frontend_url').'/dashboard?verified=1'
            );
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->intended(
            config('app.frontend_url').'/dashboard?verified=1'
        );
    }
}

```
</details>

<a id="file-apphttpcontrollerscontrollerphp"></a>
### app\Http\Controllers\Controller.php
- SHA: `a33a5105f92c`  
- Ukuran: 77 B  
- Namespace: `App\Http\Controllers`

**Class `Controller`**
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

```
</details>


## Form Requests (app/Http/Requests)

<a id="file-apphttprequestsapiauthchangepasswordrequestphp"></a>
### app\Http\Requests\Api\Auth\ChangePasswordRequest.php
- SHA: `73040a18a2b1`  
- Ukuran: 475 B  
- Namespace: `App\Http\Requests\Api\Auth`

**Class `ChangePasswordRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class ChangePasswordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiauthloginrequestphp"></a>
### app\Http\Requests\Api\Auth\LoginRequest.php
- SHA: `c6ce3f5e4836`  
- Ukuran: 442 B  
- Namespace: `App\Http\Requests\Api\Auth`

**Class `LoginRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'login' => ['required', 'string'],
            'password' => ['required', 'string'],
            'device_name' => ['nullable', 'string', 'max:100'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapicashiershiftclosecashiershiftrequestphp"></a>
### app\Http\Requests\Api\CashierShift\CloseCashierShiftRequest.php
- SHA: `48b7f66006fc`  
- Ukuran: 509 B  
- Namespace: `App\Http\Requests\Api\CashierShift`

**Class `CloseCashierShiftRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\CashierShift;

use Illuminate\Foundation\Http\FormRequest;

class CloseCashierShiftRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('cashier_shifts.close') ?? false;
    }

    public function rules(): array
    {
        return [
            'closing_cash' => ['required', 'numeric', 'min:0'],
            'closed_at' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapicashiershiftstorecashiershiftrequestphp"></a>
### app\Http\Requests\Api\CashierShift\StoreCashierShiftRequest.php
- SHA: `73ff920dd7b5`  
- Ukuran: 584 B  
- Namespace: `App\Http\Requests\Api\CashierShift`

**Class `StoreCashierShiftRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\CashierShift;

use Illuminate\Foundation\Http\FormRequest;

class StoreCashierShiftRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('cashier_shifts.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'opening_cash' => ['sometimes', 'numeric', 'min:0'],
            'opened_at' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapicashiershiftupdatecashiershiftrequestphp"></a>
### app\Http\Requests\Api\CashierShift\UpdateCashierShiftRequest.php
- SHA: `76e23384d6e7`  
- Ukuran: 398 B  
- Namespace: `App\Http\Requests\Api\CashierShift`

**Class `UpdateCashierShiftRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\CashierShift;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCashierShiftRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('cashier_shifts.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapicashmovementstorecashmovementrequestphp"></a>
### app\Http\Requests\Api\CashMovement\StoreCashMovementRequest.php
- SHA: `afd320870c07`  
- Ukuran: 712 B  
- Namespace: `App\Http\Requests\Api\CashMovement`

**Class `StoreCashMovementRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\CashMovement;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCashMovementRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('cash_movements.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'cashier_shift_id' => ['required', 'integer', 'exists:cashier_shifts,id'],
            'movement_type' => ['required', Rule::in(['cash_in', 'cash_out'])],
            'amount' => ['required', 'numeric', 'gt:0'],
            'reason' => ['nullable', 'string', 'max:255'],
            'notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapicourierstorecourierrequestphp"></a>
### app\Http\Requests\Api\Courier\StoreCourierRequest.php
- SHA: `b83e7a56c901`  
- Ukuran: 569 B  
- Namespace: `App\Http\Requests\Api\Courier`

**Class `StoreCourierRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Courier;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourierRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('couriers.create') === true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255'],
            'vehicle_number' => ['nullable', 'string', 'max:255'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapicourierupdatecourierrequestphp"></a>
### app\Http\Requests\Api\Courier\UpdateCourierRequest.php
- SHA: `d85f3d0b03d5`  
- Ukuran: 583 B  
- Namespace: `App\Http\Requests\Api\Courier`

**Class `UpdateCourierRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Courier;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourierRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('couriers.update') === true;
    }

    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255'],
            'vehicle_number' => ['nullable', 'string', 'max:255'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapicustomerstorecustomerrequestphp"></a>
### app\Http\Requests\Api\Customer\StoreCustomerRequest.php
- SHA: `ae76a38dc4b9`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Requests\Api\Customer`

**Class `StoreCustomerRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Customer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCustomerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('customers.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'code' => ['nullable', 'string', 'max:100', Rule::unique('customers', 'code')],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50', Rule::unique('customers', 'phone')],
            'email' => ['nullable', 'email', 'max:255', Rule::unique('customers', 'email')],
            'gender' => ['nullable', 'string', 'max:50'],
            'birth_date' => ['nullable', 'date'],
            'points' => ['sometimes', 'integer', 'min:0'],
            'total_spent' => ['sometimes', 'numeric', 'min:0'],
            'is_member' => ['sometimes', 'boolean'],
            'notes' => ['nullable', 'string'],

            'addresses' => ['nullable', 'array'],
            'addresses.*.label' => ['nullable', 'string', 'max:100'],
            'addresses.*.recipient_name' => ['nullable', 'string', 'max:255'],
            'addresses.*.recipient_phone' => ['nullable', 'string', 'max:50'],
            'addresses.*.address' => ['required_with:addresses', 'string'],
            'addresses.*.city' => ['nullable', 'string', 'max:100'],
            'addresses.*.province' => ['nullable', 'string', 'max:100'],
            'addresses.*.postal_code' => ['nullable', 'string', 'max:20'],
            'addresses.*.latitude' => ['nullable', 'numeric', 'between:-90,90'],
            'addresses.*.longitude' => ['nullable', 'numeric', 'between:-180,180'],
            'addresses.*.is_default' => ['sometimes', 'boolean'],
        ];
    }
}
```
</details>

<a id="file-apphttprequestsapicustomerupdatecustomerrequestphp"></a>
### app\Http\Requests\Api\Customer\UpdateCustomerRequest.php
- SHA: `eafe9236cbfe`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Requests\Api\Customer`

**Class `UpdateCustomerRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Customer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCustomerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('customers.update') ?? false;
    }

    public function rules(): array
    {
        $customerId = $this->route('customer')->id;

        return [
            'code' => ['nullable', 'string', 'max:100', Rule::unique('customers', 'code')->ignore($customerId)],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50', Rule::unique('customers', 'phone')->ignore($customerId)],
            'email' => ['nullable', 'email', 'max:255', Rule::unique('customers', 'email')->ignore($customerId)],
            'gender' => ['nullable', 'string', 'max:50'],
            'birth_date' => ['nullable', 'date'],
            'points' => ['sometimes', 'integer', 'min:0'],
            'total_spent' => ['sometimes', 'numeric', 'min:0'],
            'is_member' => ['sometimes', 'boolean'],
            'notes' => ['nullable', 'string'],

            'addresses' => ['sometimes', 'array'],
            'addresses.*.label' => ['nullable', 'string', 'max:100'],
            'addresses.*.recipient_name' => ['nullable', 'string', 'max:255'],
            'addresses.*.recipient_phone' => ['nullable', 'string', 'max:50'],
            'addresses.*.address' => ['required_with:addresses', 'string'],
            'addresses.*.city' => ['nullable', 'string', 'max:100'],
            'addresses.*.province' => ['nullable', 'string', 'max:100'],
            'addresses.*.postal_code' => ['nullable', 'string', 'max:20'],
            'addresses.*.latitude' => ['nullable', 'numeric', 'between:-90,90'],
            'addresses.*.longitude' => ['nullable', 'numeric', 'between:-180,180'],
            'addresses.*.is_default' => ['sometimes', 'boolean'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapideliveryassigncourierrequestphp"></a>
### app\Http\Requests\Api\Delivery\AssignCourierRequest.php
- SHA: `f924d1219aa0`  
- Ukuran: 460 B  
- Namespace: `App\Http\Requests\Api\Delivery`

**Class `AssignCourierRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Delivery;

use Illuminate\Foundation\Http\FormRequest;

class AssignCourierRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('deliveries.assign') === true;
    }

    public function rules(): array
    {
        return [
            'courier_id' => ['required', 'integer', 'exists:couriers,id'],
            'notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapideliverystoredeliveryrequestphp"></a>
### app\Http\Requests\Api\Delivery\StoreDeliveryRequest.php
- SHA: `ba141326d674`  
- Ukuran: 937 B  
- Namespace: `App\Http\Requests\Api\Delivery`

**Class `StoreDeliveryRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Delivery;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDeliveryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('deliveries.create') === true;
    }

    public function rules(): array
    {
        return [
            'order_id' => ['required', 'integer', 'exists:orders,id', 'unique:deliveries,order_id'],
            'customer_address_id' => ['nullable', 'integer', 'exists:customer_addresses,id'],
            'courier_id' => ['nullable', 'integer', 'exists:couriers,id'],
            'delivery_status' => ['sometimes', Rule::in(['pending', 'assigned', 'on_the_way', 'delivered', 'failed', 'cancelled'])],
            'delivery_fee' => ['sometimes', 'numeric', 'min:0'],
            'delivered_at' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapideliveryupdatedeliveryrequestphp"></a>
### app\Http\Requests\Api\Delivery\UpdateDeliveryRequest.php
- SHA: `567e31545645`  
- Ukuran: 837 B  
- Namespace: `App\Http\Requests\Api\Delivery`

**Class `UpdateDeliveryRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Delivery;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDeliveryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('deliveries.update') === true;
    }

    public function rules(): array
    {
        return [
            'customer_address_id' => ['nullable', 'integer', 'exists:customer_addresses,id'],
            'courier_id' => ['nullable', 'integer', 'exists:couriers,id'],
            'delivery_status' => ['sometimes', Rule::in(['pending', 'assigned', 'on_the_way', 'delivered', 'failed', 'cancelled'])],
            'delivery_fee' => ['sometimes', 'numeric', 'min:0'],
            'delivered_at' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapideliveryupdatedeliverystatusrequestphp"></a>
### app\Http\Requests\Api\Delivery\UpdateDeliveryStatusRequest.php
- SHA: `fe726d70496c`  
- Ukuran: 615 B  
- Namespace: `App\Http\Requests\Api\Delivery`

**Class `UpdateDeliveryStatusRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Delivery;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDeliveryStatusRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('deliveries.update_status') === true;
    }

    public function rules(): array
    {
        return [
            'delivery_status' => ['required', Rule::in(['pending', 'assigned', 'on_the_way', 'delivered', 'failed', 'cancelled'])],
            'delivered_at' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiexpenseapproveexpenserequestphp"></a>
### app\Http\Requests\Api\Expense\ApproveExpenseRequest.php
- SHA: `32ce7866a617`  
- Ukuran: 522 B  
- Namespace: `App\Http\Requests\Api\Expense`

**Class `ApproveExpenseRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Expense;

use Illuminate\Foundation\Http\FormRequest;

class ApproveExpenseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('expenses.approve') ?? false;
    }

    public function rules(): array
    {
        return [
            'cashier_shift_id' => ['nullable', 'integer', 'exists:cashier_shifts,id'],
            'approved_at' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiexpenserejectexpenserequestphp"></a>
### app\Http\Requests\Api\Expense\RejectExpenseRequest.php
- SHA: `51c2e0e7f72e`  
- Ukuran: 383 B  
- Namespace: `App\Http\Requests\Api\Expense`

**Class `RejectExpenseRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Expense;

use Illuminate\Foundation\Http\FormRequest;

class RejectExpenseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('expenses.approve') ?? false;
    }

    public function rules(): array
    {
        return [
            'notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiexpensestoreexpenserequestphp"></a>
### app\Http\Requests\Api\Expense\StoreExpenseRequest.php
- SHA: `ec147ab53c9b`  
- Ukuran: 904 B  
- Namespace: `App\Http\Requests\Api\Expense`

**Class `StoreExpenseRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Expense;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreExpenseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('expenses.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'expense_category_id' => ['required', 'integer', 'exists:expense_categories,id'],
            'expense_date' => ['required', 'date'],
            'amount' => ['required', 'numeric', 'gt:0'],
            'description' => ['nullable', 'string'],
            'status' => ['sometimes', Rule::in(['draft', 'submitted'])],
            'attachments' => ['nullable', 'array'],
            'attachments.*' => ['file', 'mimes:jpg,jpeg,png,pdf,webp', 'max:4096'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiexpenseupdateexpenserequestphp"></a>
### app\Http\Requests\Api\Expense\UpdateExpenseRequest.php
- SHA: `d421442c3798`  
- Ukuran: 821 B  
- Namespace: `App\Http\Requests\Api\Expense`

**Class `UpdateExpenseRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Expense;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateExpenseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('expenses.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['sometimes', 'required', 'integer', 'exists:outlets,id'],
            'expense_category_id' => ['sometimes', 'required', 'integer', 'exists:expense_categories,id'],
            'expense_date' => ['sometimes', 'required', 'date'],
            'amount' => ['sometimes', 'required', 'numeric', 'gt:0'],
            'description' => ['nullable', 'string'],
            'status' => ['sometimes', Rule::in(['draft', 'submitted'])],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiexpenseuploadexpenseattachmentrequestphp"></a>
### app\Http\Requests\Api\Expense\UploadExpenseAttachmentRequest.php
- SHA: `e4b68d853840`  
- Ukuran: 490 B  
- Namespace: `App\Http\Requests\Api\Expense`

**Class `UploadExpenseAttachmentRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Expense;

use Illuminate\Foundation\Http\FormRequest;

class UploadExpenseAttachmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('expenses.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'attachments' => ['required', 'array', 'min:1'],
            'attachments.*' => ['file', 'mimes:jpg,jpeg,png,pdf,webp', 'max:4096'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiexpensecategorystoreexpensecategoryrequestphp"></a>
### app\Http\Requests\Api\ExpenseCategory\StoreExpenseCategoryRequest.php
- SHA: `b55864161227`  
- Ukuran: 470 B  
- Namespace: `App\Http\Requests\Api\ExpenseCategory`

**Class `StoreExpenseCategoryRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\ExpenseCategory;

use Illuminate\Foundation\Http\FormRequest;

class StoreExpenseCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('expense_categories.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiexpensecategoryupdateexpensecategoryrequestphp"></a>
### app\Http\Requests\Api\ExpenseCategory\UpdateExpenseCategoryRequest.php
- SHA: `065dc1c5a6e8`  
- Ukuran: 484 B  
- Namespace: `App\Http\Requests\Api\ExpenseCategory`

**Class `UpdateExpenseCategoryRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\ExpenseCategory;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExpenseCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('expense_categories.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryoutletmaterialstockupsertoutletmaterialstockrequestphp"></a>
### app\Http\Requests\Api\Inventory\OutletMaterialStock\UpsertOutletMaterialStockRequest.php
- SHA: `3ecf58a4cd7d`  
- Ukuran: 717 B  
- Namespace: `App\Http\Requests\Api\Inventory\OutletMaterialStock`

**Class `UpsertOutletMaterialStockRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\OutletMaterialStock;

use Illuminate\Foundation\Http\FormRequest;

class UpsertOutletMaterialStockRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('outlet_material_stocks.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'raw_material_id' => ['required', 'integer', 'exists:raw_materials,id'],
            'qty_on_hand' => ['sometimes', 'numeric'],
            'qty_reserved' => ['sometimes', 'numeric', 'min:0'],
            'last_movement_at' => ['nullable', 'date'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryproductbomstoreproductbomrequestphp"></a>
### app\Http\Requests\Api\Inventory\ProductBom\StoreProductBomRequest.php
- SHA: `6ef341b9b7e2`  
- Ukuran: 961 B  
- Namespace: `App\Http\Requests\Api\Inventory\ProductBom`

**Class `StoreProductBomRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\ProductBom;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductBomRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('product_boms.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'product_id' => ['required', 'integer', 'exists:products,id'],
            'version' => ['sometimes', 'integer', 'min:1'],
            'is_active' => ['sometimes', 'boolean'],
            'notes' => ['nullable', 'string'],
            'items' => ['required', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required', 'integer', 'exists:raw_materials,id'],
            'items.*.unit_id' => ['required', 'integer', 'exists:units,id'],
            'items.*.qty' => ['required', 'numeric', 'gt:0'],
            'items.*.waste_percent' => ['sometimes', 'numeric', 'min:0', 'max:100'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryproductbomupdateproductbomrequestphp"></a>
### app\Http\Requests\Api\Inventory\ProductBom\UpdateProductBomRequest.php
- SHA: `0bdc70eba453`  
- Ukuran: 1009 B  
- Namespace: `App\Http\Requests\Api\Inventory\ProductBom`

**Class `UpdateProductBomRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\ProductBom;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductBomRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('product_boms.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'product_id' => ['sometimes', 'required', 'integer', 'exists:products,id'],
            'version' => ['sometimes', 'integer', 'min:1'],
            'is_active' => ['sometimes', 'boolean'],
            'notes' => ['nullable', 'string'],
            'items' => ['sometimes', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required_with:items', 'integer', 'exists:raw_materials,id'],
            'items.*.unit_id' => ['required_with:items', 'integer', 'exists:units,id'],
            'items.*.qty' => ['required_with:items', 'numeric', 'gt:0'],
            'items.*.waste_percent' => ['sometimes', 'numeric', 'min:0', 'max:100'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryrawmaterialstorerawmaterialrequestphp"></a>
### app\Http\Requests\Api\Inventory\RawMaterial\StoreRawMaterialRequest.php
- SHA: `da16e38c0db4`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Inventory\RawMaterial`

**Class `StoreRawMaterialRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\RawMaterial;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRawMaterialRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('raw_materials.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'raw_material_category_id' => ['required', 'integer', 'exists:raw_material_categories,id'],
            'unit_id' => ['required', 'integer', 'exists:units,id'],
            'code' => ['nullable', 'string', 'max:100', Rule::unique('raw_materials', 'code')],
            'sku' => ['nullable', 'string', 'max:100', Rule::unique('raw_materials', 'sku')],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'minimum_stock' => ['sometimes', 'numeric', 'min:0'],
            'last_purchase_price' => ['sometimes', 'numeric', 'min:0'],
            'average_cost' => ['sometimes', 'numeric', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],

            'outlet_stocks' => ['nullable', 'array'],
            'outlet_stocks.*.outlet_id' => ['required_with:outlet_stocks', 'integer', 'exists:outlets,id'],
            'outlet_stocks.*.qty_on_hand' => ['sometimes', 'numeric', 'min:0'],
            'outlet_stocks.*.qty_reserved' => ['sometimes', 'numeric', 'min:0'],
            'outlet_stocks.*.last_movement_at' => ['nullable', 'date'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryrawmaterialupdaterawmaterialrequestphp"></a>
### app\Http\Requests\Api\Inventory\RawMaterial\UpdateRawMaterialRequest.php
- SHA: `2a184f75afae`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Requests\Api\Inventory\RawMaterial`

**Class `UpdateRawMaterialRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\RawMaterial;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRawMaterialRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('raw_materials.update') ?? false;
    }

    public function rules(): array
    {
        $id = $this->route('rawMaterial')->id;

        return [
            'raw_material_category_id' => ['sometimes', 'required', 'integer', 'exists:raw_material_categories,id'],
            'unit_id' => ['sometimes', 'required', 'integer', 'exists:units,id'],
            'code' => ['nullable', 'string', 'max:100', Rule::unique('raw_materials', 'code')->ignore($id)],
            'sku' => ['nullable', 'string', 'max:100', Rule::unique('raw_materials', 'sku')->ignore($id)],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'minimum_stock' => ['sometimes', 'numeric', 'min:0'],
            'last_purchase_price' => ['sometimes', 'numeric', 'min:0'],
            'average_cost' => ['sometimes', 'numeric', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],

            'outlet_stocks' => ['sometimes', 'array'],
            'outlet_stocks.*.outlet_id' => ['required_with:outlet_stocks', 'integer', 'exists:outlets,id'],
            'outlet_stocks.*.qty_on_hand' => ['sometimes', 'numeric', 'min:0'],
            'outlet_stocks.*.qty_reserved' => ['sometimes', 'numeric', 'min:0'],
            'outlet_stocks.*.last_movement_at' => ['nullable', 'date'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryrawmaterialcategorystorerawmaterialcategoryrequestphp"></a>
### app\Http\Requests\Api\Inventory\RawMaterialCategory\StoreRawMaterialCategoryRequest.php
- SHA: `98f70b7c0cc2`  
- Ukuran: 440 B  
- Namespace: `App\Http\Requests\Api\Inventory\RawMaterialCategory`

**Class `StoreRawMaterialCategoryRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\RawMaterialCategory;

use Illuminate\Foundation\Http\FormRequest;

class StoreRawMaterialCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('raw_material_categories.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryrawmaterialcategoryupdaterawmaterialcategoryrequestphp"></a>
### app\Http\Requests\Api\Inventory\RawMaterialCategory\UpdateRawMaterialCategoryRequest.php
- SHA: `f9078e315177`  
- Ukuran: 454 B  
- Namespace: `App\Http\Requests\Api\Inventory\RawMaterialCategory`

**Class `UpdateRawMaterialCategoryRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\RawMaterialCategory;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRawMaterialCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('raw_material_categories.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'required', 'string', 'max:255'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventorystockadjustmentstorestockadjustmentrequestphp"></a>
### app\Http\Requests\Api\Inventory\StockAdjustment\StoreStockAdjustmentRequest.php
- SHA: `d6485fb9da1b`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Inventory\StockAdjustment`

**Class `StoreStockAdjustmentRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\StockAdjustment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStockAdjustmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('stock_adjustments.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'adjustment_number' => ['nullable', 'string', 'max:255'],
            'adjustment_date' => ['required', 'date'],
            'reason' => ['required', Rule::in(['damaged', 'expired', 'lost', 'correction', 'waste', 'other'])],
            'notes' => ['nullable', 'string'],
            'approved_by' => ['nullable', 'integer', 'exists:users,id'],
            'approved_at' => ['nullable', 'date'],

            'items' => ['required', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required', 'integer', 'exists:raw_materials,id'],
            'items.*.qty_difference' => ['required', 'numeric', 'not_in:0'],
            'items.*.unit_id' => ['required', 'integer', 'exists:units,id'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventorystockadjustmentupdatestockadjustmentrequestphp"></a>
### app\Http\Requests\Api\Inventory\StockAdjustment\UpdateStockAdjustmentRequest.php
- SHA: `0c613407824c`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Inventory\StockAdjustment`

**Class `UpdateStockAdjustmentRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\StockAdjustment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStockAdjustmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('stock_adjustments.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['sometimes', 'required', 'integer', 'exists:outlets,id'],
            'adjustment_number' => ['nullable', 'string', 'max:255'],
            'adjustment_date' => ['sometimes', 'required', 'date'],
            'reason' => ['sometimes', 'required', Rule::in(['damaged', 'expired', 'lost', 'correction', 'waste', 'other'])],
            'notes' => ['nullable', 'string'],
            'approved_by' => ['nullable', 'integer', 'exists:users,id'],
            'approved_at' => ['nullable', 'date'],

            'items' => ['sometimes', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required_with:items', 'integer', 'exists:raw_materials,id'],
            'items.*.qty_difference' => ['required_with:items', 'numeric', 'not_in:0'],
            'items.*.unit_id' => ['required_with:items', 'integer', 'exists:units,id'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventorystockopnamepoststockopnamerequestphp"></a>
### app\Http\Requests\Api\Inventory\StockOpname\PostStockOpnameRequest.php
- SHA: `e677383a6deb`  
- Ukuran: 403 B  
- Namespace: `App\Http\Requests\Api\Inventory\StockOpname`

**Class `PostStockOpnameRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\StockOpname;

use Illuminate\Foundation\Http\FormRequest;

class PostStockOpnameRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('stock_opnames.post') ?? false;
    }

    public function rules(): array
    {
        return [
            'posted_at' => ['nullable', 'date'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventorystockopnamestorestockopnamerequestphp"></a>
### app\Http\Requests\Api\Inventory\StockOpname\StoreStockOpnameRequest.php
- SHA: `d1d728cc9d5d`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Inventory\StockOpname`

**Class `StoreStockOpnameRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\StockOpname;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStockOpnameRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('stock_opnames.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'opname_number' => ['nullable', 'string', 'max:255'],
            'opname_date' => ['required', 'date'],
            'status' => ['sometimes', Rule::in(['draft', 'posted', 'cancelled'])],
            'notes' => ['nullable', 'string'],

            'items' => ['required', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required', 'integer', 'exists:raw_materials,id'],
            'items.*.system_qty' => ['nullable', 'numeric', 'min:0'],
            'items.*.actual_qty' => ['required', 'numeric', 'min:0'],
            'items.*.unit_id' => ['required', 'integer', 'exists:units,id'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventorystockopnameupdatestockopnamerequestphp"></a>
### app\Http\Requests\Api\Inventory\StockOpname\UpdateStockOpnameRequest.php
- SHA: `de9e976594c9`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Inventory\StockOpname`

**Class `UpdateStockOpnameRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\StockOpname;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStockOpnameRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('stock_opnames.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['sometimes', 'required', 'integer', 'exists:outlets,id'],
            'opname_number' => ['nullable', 'string', 'max:255'],
            'opname_date' => ['sometimes', 'required', 'date'],
            'status' => ['sometimes', Rule::in(['draft', 'posted', 'cancelled'])],
            'notes' => ['nullable', 'string'],

            'items' => ['sometimes', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required_with:items', 'integer', 'exists:raw_materials,id'],
            'items.*.system_qty' => ['nullable', 'numeric', 'min:0'],
            'items.*.actual_qty' => ['required_with:items', 'numeric', 'min:0'],
            'items.*.unit_id' => ['required_with:items', 'integer', 'exists:units,id'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventorystocktransferreceivestocktransferrequestphp"></a>
### app\Http\Requests\Api\Inventory\StockTransfer\ReceiveStockTransferRequest.php
- SHA: `884f0f3761c6`  
- Ukuran: 649 B  
- Namespace: `App\Http\Requests\Api\Inventory\StockTransfer`

**Class `ReceiveStockTransferRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\StockTransfer;

use Illuminate\Foundation\Http\FormRequest;

class ReceiveStockTransferRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('stock_transfers.receive') ?? false;
    }

    public function rules(): array
    {
        return [
            'received_at' => ['nullable', 'date'],
            'items' => ['nullable', 'array'],
            'items.*.raw_material_id' => ['required_with:items', 'integer', 'exists:raw_materials,id'],
            'items.*.qty_received' => ['required_with:items', 'numeric', 'gt:0'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventorystocktransfersendstocktransferrequestphp"></a>
### app\Http\Requests\Api\Inventory\StockTransfer\SendStockTransferRequest.php
- SHA: `948627421b02`  
- Ukuran: 407 B  
- Namespace: `App\Http\Requests\Api\Inventory\StockTransfer`

**Class `SendStockTransferRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\StockTransfer;

use Illuminate\Foundation\Http\FormRequest;

class SendStockTransferRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('stock_transfers.send') ?? false;
    }

    public function rules(): array
    {
        return [
            'sent_at' => ['nullable', 'date'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventorystocktransferstorestocktransferrequestphp"></a>
### app\Http\Requests\Api\Inventory\StockTransfer\StoreStockTransferRequest.php
- SHA: `92e8aa6c6b77`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Inventory\StockTransfer`

**Class `StoreStockTransferRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\StockTransfer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStockTransferRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('stock_transfers.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'source_outlet_id' => ['required', 'integer', 'exists:outlets,id', 'different:target_outlet_id'],
            'target_outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'transfer_number' => ['nullable', 'string', 'max:255'],
            'status' => ['sometimes', Rule::in(['draft', 'sent', 'received', 'cancelled'])],
            'transfer_date' => ['required', 'date'],
            'notes' => ['nullable', 'string'],

            'items' => ['required', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required', 'integer', 'exists:raw_materials,id'],
            'items.*.qty_sent' => ['required', 'numeric', 'gt:0'],
            'items.*.qty_received' => ['nullable', 'numeric', 'gt:0'],
            'items.*.unit_id' => ['required', 'integer', 'exists:units,id'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventorystocktransferupdatestocktransferrequestphp"></a>
### app\Http\Requests\Api\Inventory\StockTransfer\UpdateStockTransferRequest.php
- SHA: `2a1c5a6891b2`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Inventory\StockTransfer`

**Class `UpdateStockTransferRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\StockTransfer;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Validation\Rule;

class UpdateStockTransferRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('stock_transfers.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'source_outlet_id' => ['sometimes', 'required', 'integer', 'exists:outlets,id', 'different:target_outlet_id'],
            'target_outlet_id' => ['sometimes', 'required', 'integer', 'exists:outlets,id'],
            'transfer_number' => ['nullable', 'string', 'max:255'],
            'transfer_date' => ['sometimes', 'required', 'date'],
            'notes' => ['nullable', 'string'],

            'items' => ['sometimes', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required_with:items', 'integer', 'exists:raw_materials,id'],
            'items.*.qty_sent' => ['required_with:items', 'numeric', 'gt:0'],
            'items.*.qty_received' => ['nullable', 'numeric', 'gt:0'],
            'items.*.unit_id' => ['required_with:items', 'integer', 'exists:units,id'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryunitstoreunitrequestphp"></a>
### app\Http\Requests\Api\Inventory\Unit\StoreUnitRequest.php
- SHA: `b7df1166a5d9`  
- Ukuran: 511 B  
- Namespace: `App\Http\Requests\Api\Inventory\Unit`

**Class `StoreUnitRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\Unit;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUnitRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('units.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max:50', Rule::unique('units', 'code')],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryunitupdateunitrequestphp"></a>
### app\Http\Requests\Api\Inventory\Unit\UpdateUnitRequest.php
- SHA: `0871e5c8d2f0`  
- Ukuran: 592 B  
- Namespace: `App\Http\Requests\Api\Inventory\Unit`

**Class `UpdateUnitRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\Unit;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUnitRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('units.update') ?? false;
    }

    public function rules(): array
    {
        $id = $this->route('unit')->id;

        return [
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'code' => ['sometimes', 'required', 'string', 'max:50', Rule::unique('units', 'code')->ignore($id)],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryunitconversionstoreunitconversionrequestphp"></a>
### app\Http\Requests\Api\Inventory\UnitConversion\StoreUnitConversionRequest.php
- SHA: `e7b15c89914a`  
- Ukuran: 833 B  
- Namespace: `App\Http\Requests\Api\Inventory\UnitConversion`

**Class `StoreUnitConversionRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\UnitConversion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUnitConversionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('unit_conversions.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'from_unit_id' => ['required', 'integer', 'exists:units,id', 'different:to_unit_id'],
            'to_unit_id' => ['required', 'integer', 'exists:units,id'],
            'multiplier' => ['required', 'numeric', 'gt:0'],
            Rule::unique('unit_conversions')->where(fn ($q) => $q
                ->where('from_unit_id', $this->input('from_unit_id'))
                ->where('to_unit_id', $this->input('to_unit_id'))),
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiinventoryunitconversionupdateunitconversionrequestphp"></a>
### app\Http\Requests\Api\Inventory\UnitConversion\UpdateUnitConversionRequest.php
- SHA: `4a69032005cc`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Inventory\UnitConversion`

**Class `UpdateUnitConversionRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Inventory\UnitConversion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUnitConversionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('unit_conversions.update') ?? false;
    }

    public function rules(): array
    {
        $id = $this->route('unitConversion')->id;

        return [
            'from_unit_id' => ['sometimes', 'required', 'integer', 'exists:units,id', 'different:to_unit_id'],
            'to_unit_id' => ['sometimes', 'required', 'integer', 'exists:units,id'],
            'multiplier' => ['sometimes', 'required', 'numeric', 'gt:0'],
            Rule::unique('unit_conversions')->ignore($id)->where(fn ($q) => $q
                ->where('from_unit_id', $this->input('from_unit_id', $this->route('unitConversion')->from_unit_id))
                ->where('to_unit_id', $this->input('to_unit_id', $this->route('unitConversion')->to_unit_id))),
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapikitchencancelkitchenticketrequestphp"></a>
### app\Http\Requests\Api\Kitchen\CancelKitchenTicketRequest.php
- SHA: `b7a3494b8173`  
- Ukuran: 397 B  
- Namespace: `App\Http\Requests\Api\Kitchen`

**Class `CancelKitchenTicketRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Kitchen;

use Illuminate\Foundation\Http\FormRequest;

class CancelKitchenTicketRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'cancelled_at' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapikitchenprintkitchenticketrequestphp"></a>
### app\Http\Requests\Api\Kitchen\PrintKitchenTicketRequest.php
- SHA: `a71484bc0821`  
- Ukuran: 394 B  
- Namespace: `App\Http\Requests\Api\Kitchen`

**Class `PrintKitchenTicketRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Kitchen;

use Illuminate\Foundation\Http\FormRequest;

class PrintKitchenTicketRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'printed_at' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapikitchenreadykitchenticketrequestphp"></a>
### app\Http\Requests\Api\Kitchen\ReadyKitchenTicketRequest.php
- SHA: `2475868b4e90`  
- Ukuran: 392 B  
- Namespace: `App\Http\Requests\Api\Kitchen`

**Class `ReadyKitchenTicketRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Kitchen;

use Illuminate\Foundation\Http\FormRequest;

class ReadyKitchenTicketRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'ready_at' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapikitchenservekitchenticketrequestphp"></a>
### app\Http\Requests\Api\Kitchen\ServeKitchenTicketRequest.php
- SHA: `b9274c7daf57`  
- Ukuran: 396 B  
- Namespace: `App\Http\Requests\Api\Kitchen`

**Class `ServeKitchenTicketRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Kitchen;

use Illuminate\Foundation\Http\FormRequest;

class ServeKitchenTicketRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'completed_at' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapikitchenstartpreparingkitchenticketrequestphp"></a>
### app\Http\Requests\Api\Kitchen\StartPreparingKitchenTicketRequest.php
- SHA: `08de2ca63976`  
- Ukuran: 404 B  
- Namespace: `App\Http\Requests\Api\Kitchen`

**Class `StartPreparingKitchenTicketRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Kitchen;

use Illuminate\Foundation\Http\FormRequest;

class StartPreparingKitchenTicketRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'prepared_at' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapikitchenstorekitchenticketrequestphp"></a>
### app\Http\Requests\Api\Kitchen\StoreKitchenTicketRequest.php
- SHA: `3c20119d3fba`  
- Ukuran: 368 B  
- Namespace: `App\Http\Requests\Api\Kitchen`

**Class `StoreKitchenTicketRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Kitchen;

use Illuminate\Foundation\Http\FormRequest;

class StoreKitchenTicketRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'order_id' => ['required', 'integer', 'exists:orders,id'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiorderstoreorderrequestphp"></a>
### app\Http\Requests\Api\Order\StoreOrderRequest.php
- SHA: `234f8fd5d683`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Requests\Api\Order`

**Class `StoreOrderRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Order;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('orders.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'cashier_shift_id' => ['nullable', 'integer', 'exists:cashier_shifts,id'],
            'customer_id' => ['nullable', 'integer', 'exists:customers,id'],
            'queue_number' => ['nullable', 'string', 'max:100'],
            'order_channel' => ['sometimes', 'string', Rule::in(['pos', 'dine_in', 'takeaway', 'pickup', 'delivery', 'website'])],
            'order_status' => ['sometimes', 'string', Rule::in(['draft', 'pending', 'confirmed'])],
            'payment_status' => ['sometimes', 'string', Rule::in(['unpaid', 'partial', 'paid', 'refunded', 'cancelled'])],
            'discount_amount' => ['sometimes', 'numeric', 'min:0'],
            'tax_amount' => ['sometimes', 'numeric', 'min:0'],
            'service_charge_amount' => ['sometimes', 'numeric', 'min:0'],
            'paid_total' => ['sometimes', 'numeric', 'min:0'],
            'change_amount' => ['sometimes', 'numeric', 'min:0'],
            'notes' => ['nullable', 'string'],
            'ordered_at' => ['nullable', 'date'],

            'items' => ['required', 'array', 'min:1'],
            'items.*.product_id' => ['required', 'integer', 'exists:products,id'],
            'items.*.qty' => ['required', 'numeric', 'gt:0'],
            'items.*.discount_amount' => ['sometimes', 'numeric', 'min:0'],
            'items.*.notes' => ['nullable', 'string'],

            'items.*.variants' => ['nullable', 'array'],
            'items.*.variants.*.variant_group_name_snapshot' => ['required_with:items.*.variants', 'string', 'max:255'],
            'items.*.variants.*.variant_option_name_snapshot' => ['required_with:items.*.variants', 'string', 'max:255'],
            'items.*.variants.*.price_adjustment' => ['sometimes', 'numeric', 'min:0'],

            'items.*.modifiers' => ['nullable', 'array'],
            'items.*.modifiers.*.modifier_group_name_snapshot' => ['required_with:items.*.modifiers', 'string', 'max:255'],
            'items.*.modifiers.*.modifier_option_name_snapshot' => ['required_with:items.*.modifiers', 'string', 'max:255'],
            'items.*.modifiers.*.qty' => ['sometimes', 'numeric', 'gt:0'],
            'items.*.modifiers.*.price' => ['sometimes', 'numeric', 'min:0'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiorderupdateorderrequestphp"></a>
### app\Http\Requests\Api\Order\UpdateOrderRequest.php
- SHA: `18b33e2cc177`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Requests\Api\Order`

**Class `UpdateOrderRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Order;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('orders.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['sometimes', 'required', 'integer', 'exists:outlets,id'],
            'cashier_shift_id' => ['nullable', 'integer', 'exists:cashier_shifts,id'],
            'customer_id' => ['nullable', 'integer', 'exists:customers,id'],
            'queue_number' => ['nullable', 'string', 'max:100'],
            'order_channel' => ['sometimes', 'string', Rule::in(['pos', 'dine_in', 'takeaway', 'pickup', 'delivery', 'website'])],
            'order_status' => ['sometimes', 'string', Rule::in(['draft', 'pending', 'confirmed', 'preparing', 'ready'])],
            'payment_status' => ['sometimes', 'string', Rule::in(['unpaid', 'partial', 'paid', 'refunded', 'cancelled'])],
            'discount_amount' => ['sometimes', 'numeric', 'min:0'],
            'tax_amount' => ['sometimes', 'numeric', 'min:0'],
            'service_charge_amount' => ['sometimes', 'numeric', 'min:0'],
            'paid_total' => ['sometimes', 'numeric', 'min:0'],
            'change_amount' => ['sometimes', 'numeric', 'min:0'],
            'notes' => ['nullable', 'string'],
            'ordered_at' => ['nullable', 'date'],

            'items' => ['sometimes', 'array', 'min:1'],
            'items.*.product_id' => ['required_with:items', 'integer', 'exists:products,id'],
            'items.*.qty' => ['required_with:items', 'numeric', 'gt:0'],
            'items.*.discount_amount' => ['sometimes', 'numeric', 'min:0'],
            'items.*.notes' => ['nullable', 'string'],

            'items.*.variants' => ['nullable', 'array'],
            'items.*.variants.*.variant_group_name_snapshot' => ['required_with:items.*.variants', 'string', 'max:255'],
            'items.*.variants.*.variant_option_name_snapshot' => ['required_with:items.*.variants', 'string', 'max:255'],
            'items.*.variants.*.price_adjustment' => ['sometimes', 'numeric', 'min:0'],

            'items.*.modifiers' => ['nullable', 'array'],
            'items.*.modifiers.*.modifier_group_name_snapshot' => ['required_with:items.*.modifiers', 'string', 'max:255'],
            'items.*.modifiers.*.modifier_option_name_snapshot' => ['required_with:items.*.modifiers', 'string', 'max:255'],
            'items.*.modifiers.*.qty' => ['sometimes', 'numeric', 'gt:0'],
            'items.*.modifiers.*.price' => ['sometimes', 'numeric', 'min:0'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapioutletstoreoutletrequestphp"></a>
### app\Http\Requests\Api\Outlet\StoreOutletRequest.php
- SHA: `71eba2a50f68`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Outlet`

**Class `StoreOutletRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Outlet;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOutletRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('outlets.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'code' => ['required', 'string', 'max:50', Rule::unique('outlets', 'code')],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:255'],
            'address' => ['nullable', 'string'],
            'city' => ['nullable', 'string', 'max:100'],
            'province' => ['nullable', 'string', 'max:100'],
            'postal_code' => ['nullable', 'string', 'max:20'],
            'latitude' => ['nullable', 'numeric', 'between:-90,90'],
            'longitude' => ['nullable', 'numeric', 'between:-180,180'],
            'opening_time' => ['nullable', 'date_format:H:i'],
            'closing_time' => ['nullable', 'date_format:H:i'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapioutletupdateoutletrequestphp"></a>
### app\Http\Requests\Api\Outlet\UpdateOutletRequest.php
- SHA: `a80361284ab2`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Outlet`

**Class `UpdateOutletRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Outlet;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateOutletRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('outlets.update') ?? false;
    }

    public function rules(): array
    {
        $outletId = $this->route('outlet')->id;

        return [
            'code' => ['sometimes', 'required', 'string', 'max:50', Rule::unique('outlets', 'code')->ignore($outletId)],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:255'],
            'address' => ['nullable', 'string'],
            'city' => ['nullable', 'string', 'max:100'],
            'province' => ['nullable', 'string', 'max:100'],
            'postal_code' => ['nullable', 'string', 'max:20'],
            'latitude' => ['nullable', 'numeric', 'between:-90,90'],
            'longitude' => ['nullable', 'numeric', 'between:-180,180'],
            'opening_time' => ['nullable', 'date_format:H:i'],
            'closing_time' => ['nullable', 'date_format:H:i'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapioutletupdateoutletsettingrequestphp"></a>
### app\Http\Requests\Api\Outlet\UpdateOutletSettingRequest.php
- SHA: `306c3e4912b0`  
- Ukuran: 995 B  
- Namespace: `App\Http\Requests\Api\Outlet`

**Class `UpdateOutletSettingRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Outlet;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Validation\Rule;

class UpdateOutletSettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('outlet_settings.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'tax_percent' => ['sometimes', 'numeric', 'min:0', 'max:100'],
            'service_charge_percent' => ['sometimes', 'numeric', 'min:0', 'max:100'],
            'currency_code' => ['sometimes', 'string', 'max:10'],
            'receipt_footer' => ['nullable', 'string'],
            'invoice_prefix' => ['nullable', 'string', 'max:50'],
            'order_prefix' => ['nullable', 'string', 'max:50'],
            'timezone' => ['sometimes', 'string', 'max:100'],
            'allow_negative_stock' => ['sometimes', 'boolean'],
            'low_stock_notification_enabled' => ['sometimes', 'boolean'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapipaymentcancelpaymentrequestphp"></a>
### app\Http\Requests\Api\Payment\CancelPaymentRequest.php
- SHA: `bf7837e18b22`  
- Ukuran: 382 B  
- Namespace: `App\Http\Requests\Api\Payment`

**Class `CancelPaymentRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Payment;

use Illuminate\Foundation\Http\FormRequest;

class CancelPaymentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('payments.cancel') ?? false;
    }

    public function rules(): array
    {
        return [
            'notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapipaymentstorepaymentrequestphp"></a>
### app\Http\Requests\Api\Payment\StorePaymentRequest.php
- SHA: `dd9c35cc68cd`  
- Ukuran: 851 B  
- Namespace: `App\Http\Requests\Api\Payment`

**Class `StorePaymentRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Payment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePaymentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('payments.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'order_id' => ['required', 'integer', 'exists:orders,id'],
            'payment_method_id' => ['required', 'integer', 'exists:payment_methods,id'],
            'amount' => ['required', 'numeric', 'gt:0'],
            'reference_number' => ['nullable', 'string', 'max:255'],
            'paid_at' => ['nullable', 'date'],
            'status' => ['sometimes', Rule::in(['pending', 'paid', 'failed', 'cancelled', 'refunded'])],
            'notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapipaymentmethodstorepaymentmethodrequestphp"></a>
### app\Http\Requests\Api\PaymentMethod\StorePaymentMethodRequest.php
- SHA: `08d07e4c5e05`  
- Ukuran: 689 B  
- Namespace: `App\Http\Requests\Api\PaymentMethod`

**Class `StorePaymentMethodRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\PaymentMethod;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePaymentMethodRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('payment_methods.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'code' => ['required', 'string', 'max:100', Rule::unique('payment_methods', 'code')],
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', Rule::in(['cash', 'qris', 'transfer', 'ewallet', 'other'])],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapipaymentmethodupdatepaymentmethodrequestphp"></a>
### app\Http\Requests\Api\PaymentMethod\UpdatePaymentMethodRequest.php
- SHA: `60c7d54372e0`  
- Ukuran: 818 B  
- Namespace: `App\Http\Requests\Api\PaymentMethod`

**Class `UpdatePaymentMethodRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\PaymentMethod;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePaymentMethodRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('payment_methods.update') ?? false;
    }

    public function rules(): array
    {
        $paymentMethodId = $this->route('paymentMethod')->id;

        return [
            'code' => ['sometimes', 'required', 'string', 'max:100', Rule::unique('payment_methods', 'code')->ignore($paymentMethodId)],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'type' => ['sometimes', 'required', Rule::in(['cash', 'qris', 'transfer', 'ewallet', 'other'])],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapipermissionstorepermissionrequestphp"></a>
### app\Http\Requests\Api\Permission\StorePermissionRequest.php
- SHA: `4a647a9c8b71`  
- Ukuran: 469 B  
- Namespace: `App\Http\Requests\Api\Permission`

**Class `StorePermissionRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Permission;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePermissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('permissions.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:150', Rule::unique('permissions', 'name')],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapipermissionupdatepermissionrequestphp"></a>
### app\Http\Requests\Api\Permission\UpdatePermissionRequest.php
- SHA: `98961f4600c1`  
- Ukuran: 550 B  
- Namespace: `App\Http\Requests\Api\Permission`

**Class `UpdatePermissionRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Permission;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePermissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('permissions.update') ?? false;
    }

    public function rules(): array
    {
        $permissionId = $this->route('permission')->id;

        return [
            'name' => ['required', 'string', 'max:150', Rule::unique('permissions', 'name')->ignore($permissionId)],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiproductstoreproductrequestphp"></a>
### app\Http\Requests\Api\Product\StoreProductRequest.php
- SHA: `72f9732bbc64`  
- Ukuran: 5 KB  
- Namespace: `App\Http\Requests\Api\Product`

**Class `StoreProductRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
- **withValidator**($validator) : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('products.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'product_category_id' => ['required', 'integer', 'exists:product_categories,id'],
            'sku' => ['nullable', 'string', 'max:100', Rule::unique('products', 'sku')],
            'code' => ['nullable', 'string', 'max:100', Rule::unique('products', 'code')],
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('products', 'slug')],
            'description' => ['nullable', 'string'],
            'image_url' => ['nullable', 'string', 'max:2048'],
            'base_price' => ['required', 'numeric', 'min:0'],
            'product_type' => ['required', Rule::in(['single', 'bundle'])],
            'is_active' => ['sometimes', 'boolean'],
            'is_featured' => ['sometimes', 'boolean'],
            'track_recipe' => ['sometimes', 'boolean'],
            'track_stock_direct' => ['sometimes', 'boolean'],

            'prices' => ['nullable', 'array'],
            'prices.*.outlet_id' => ['required_with:prices', 'integer', 'exists:outlets,id'],
            'prices.*.price' => ['required_with:prices', 'numeric', 'min:0'],
            'prices.*.dine_in_price' => ['nullable', 'numeric', 'min:0'],
            'prices.*.takeaway_price' => ['nullable', 'numeric', 'min:0'],
            'prices.*.delivery_price' => ['nullable', 'numeric', 'min:0'],
            'prices.*.starts_at' => ['nullable', 'date'],
            'prices.*.ends_at' => ['nullable', 'date'],
            'prices.*.is_active' => ['sometimes', 'boolean'],

            'outlet_statuses' => ['nullable', 'array'],
            'outlet_statuses.*.outlet_id' => ['required_with:outlet_statuses', 'integer', 'exists:outlets,id'],
            'outlet_statuses.*.is_available' => ['sometimes', 'boolean'],
            'outlet_statuses.*.is_hidden' => ['sometimes', 'boolean'],
            'outlet_statuses.*.daily_limit' => ['nullable', 'integer', 'min:0'],
            'outlet_statuses.*.notes' => ['nullable', 'string'],

            'variant_groups' => ['nullable', 'array'],
            'variant_groups.*.name' => ['required_with:variant_groups', 'string', 'max:255'],
            'variant_groups.*.selection_type' => ['required_with:variant_groups', Rule::in(['single', 'multiple'])],
            'variant_groups.*.is_required' => ['sometimes', 'boolean'],
            'variant_groups.*.sort_order' => ['sometimes', 'integer', 'min:0'],
            'variant_groups.*.options' => ['required_with:variant_groups', 'array', 'min:1'],
            'variant_groups.*.options.*.name' => ['required', 'string', 'max:255'],
            'variant_groups.*.options.*.price_adjustment' => ['sometimes', 'numeric', 'min:0'],
            'variant_groups.*.options.*.sort_order' => ['sometimes', 'integer', 'min:0'],
            'variant_groups.*.options.*.is_active' => ['sometimes', 'boolean'],

            'modifier_groups' => ['nullable', 'array'],
            'modifier_groups.*.name' => ['required_with:modifier_groups', 'string', 'max:255'],
            'modifier_groups.*.min_select' => ['sometimes', 'integer', 'min:0'],
            'modifier_groups.*.max_select' => ['sometimes', 'integer', 'min:0'],
            'modifier_groups.*.is_required' => ['sometimes', 'boolean'],
            'modifier_groups.*.sort_order' => ['sometimes', 'integer', 'min:0'],
            'modifier_groups.*.options' => ['required_with:modifier_groups', 'array', 'min:1'],
            'modifier_groups.*.options.*.name' => ['required', 'string', 'max:255'],
            'modifier_groups.*.options.*.price' => ['sometimes', 'numeric', 'min:0'],
            'modifier_groups.*.options.*.is_active' => ['sometimes', 'boolean'],
            'modifier_groups.*.options.*.sort_order' => ['sometimes', 'integer', 'min:0'],

            'bundle_items' => ['nullable', 'array'],
            'bundle_items.*.bundled_product_id' => ['required_with:bundle_items', 'integer', 'exists:products,id'],
            'bundle_items.*.qty' => ['required_with:bundle_items', 'numeric', 'gt:0'],
        ];
    }

    public function withValidator($validator): void
    {
        $validator->after(function ($validator) {
            foreach (($this->input('modifier_groups') ?? []) as $index => $group) {
                $min = (int) ($group['min_select'] ?? 0);
                $max = (int) ($group['max_select'] ?? 1);

                if ($max < $min) {
                    $validator->errors()->add(
                        "modifier_groups.$index.max_select",
                        'max_select tidak boleh lebih kecil dari min_select.'
                    );
                }
            }
        });
    }
}

```
</details>

<a id="file-apphttprequestsapiproductupdateproductrequestphp"></a>
### app\Http\Requests\Api\Product\UpdateProductRequest.php
- SHA: `e909f93495d9`  
- Ukuran: 5 KB  
- Namespace: `App\Http\Requests\Api\Product`

**Class `UpdateProductRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
- **withValidator**($validator) : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('products.update') ?? false;
    }

    public function rules(): array
    {
        $productId = $this->route('product')->id;

        return [
            'product_category_id' => ['sometimes', 'required', 'integer', 'exists:product_categories,id'],
            'sku' => ['nullable', 'string', 'max:100', Rule::unique('products', 'sku')->ignore($productId)],
            'code' => ['nullable', 'string', 'max:100', Rule::unique('products', 'code')->ignore($productId)],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('products', 'slug')->ignore($productId)],
            'description' => ['nullable', 'string'],
            'image_url' => ['nullable', 'string', 'max:2048'],
            'base_price' => ['sometimes', 'required', 'numeric', 'min:0'],
            'product_type' => ['sometimes', 'required', Rule::in(['single', 'bundle'])],
            'is_active' => ['sometimes', 'boolean'],
            'is_featured' => ['sometimes', 'boolean'],
            'track_recipe' => ['sometimes', 'boolean'],
            'track_stock_direct' => ['sometimes', 'boolean'],

            'prices' => ['sometimes', 'array'],
            'prices.*.outlet_id' => ['required_with:prices', 'integer', 'exists:outlets,id'],
            'prices.*.price' => ['required_with:prices', 'numeric', 'min:0'],
            'prices.*.dine_in_price' => ['nullable', 'numeric', 'min:0'],
            'prices.*.takeaway_price' => ['nullable', 'numeric', 'min:0'],
            'prices.*.delivery_price' => ['nullable', 'numeric', 'min:0'],
            'prices.*.starts_at' => ['nullable', 'date'],
            'prices.*.ends_at' => ['nullable', 'date'],
            'prices.*.is_active' => ['sometimes', 'boolean'],

            'outlet_statuses' => ['sometimes', 'array'],
            'outlet_statuses.*.outlet_id' => ['required_with:outlet_statuses', 'integer', 'exists:outlets,id'],
            'outlet_statuses.*.is_available' => ['sometimes', 'boolean'],
            'outlet_statuses.*.is_hidden' => ['sometimes', 'boolean'],
            'outlet_statuses.*.daily_limit' => ['nullable', 'integer', 'min:0'],
            'outlet_statuses.*.notes' => ['nullable', 'string'],

            'variant_groups' => ['sometimes', 'array'],
            'variant_groups.*.name' => ['required_with:variant_groups', 'string', 'max:255'],
            'variant_groups.*.selection_type' => ['required_with:variant_groups', Rule::in(['single', 'multiple'])],
            'variant_groups.*.is_required' => ['sometimes', 'boolean'],
            'variant_groups.*.sort_order' => ['sometimes', 'integer', 'min:0'],
            'variant_groups.*.options' => ['required_with:variant_groups', 'array', 'min:1'],
            'variant_groups.*.options.*.name' => ['required', 'string', 'max:255'],
            'variant_groups.*.options.*.price_adjustment' => ['sometimes', 'numeric', 'min:0'],
            'variant_groups.*.options.*.sort_order' => ['sometimes', 'integer', 'min:0'],
            'variant_groups.*.options.*.is_active' => ['sometimes', 'boolean'],

            'modifier_groups' => ['sometimes', 'array'],
            'modifier_groups.*.name' => ['required_with:modifier_groups', 'string', 'max:255'],
            'modifier_groups.*.min_select' => ['sometimes', 'integer', 'min:0'],
            'modifier_groups.*.max_select' => ['sometimes', 'integer', 'min:0'],
            'modifier_groups.*.is_required' => ['sometimes', 'boolean'],
            'modifier_groups.*.sort_order' => ['sometimes', 'integer', 'min:0'],
            'modifier_groups.*.options' => ['required_with:modifier_groups', 'array', 'min:1'],
            'modifier_groups.*.options.*.name' => ['required', 'string', 'max:255'],
            'modifier_groups.*.options.*.price' => ['sometimes', 'numeric', 'min:0'],
            'modifier_groups.*.options.*.is_active' => ['sometimes', 'boolean'],
            'modifier_groups.*.options.*.sort_order' => ['sometimes', 'integer', 'min:0'],

            'bundle_items' => ['sometimes', 'array'],
            'bundle_items.*.bundled_product_id' => ['required_with:bundle_items', 'integer', 'exists:products,id'],
            'bundle_items.*.qty' => ['required_with:bundle_items', 'numeric', 'gt:0'],
        ];
    }

    public function withValidator($validator): void
    {
        $validator->after(function ($validator) {
            foreach (($this->input('modifier_groups') ?? []) as $index => $group) {
                $min = (int) ($group['min_select'] ?? 0);
                $max = (int) ($group['max_select'] ?? 1);

                if ($max < $min) {
                    $validator->errors()->add(
                        "modifier_groups.$index.max_select",
                        'max_select tidak boleh lebih kecil dari min_select.'
                    );
                }
            }
        });
    }
}
```
</details>

<a id="file-apphttprequestsapiproductcategorystoreproductcategoryrequestphp"></a>
### app\Http\Requests\Api\ProductCategory\StoreProductCategoryRequest.php
- SHA: `92d80ebeaba4`  
- Ukuran: 665 B  
- Namespace: `App\Http\Requests\Api\ProductCategory`

**Class `StoreProductCategoryRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\ProductCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('product_categories.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('product_categories', 'slug')],
            'sort_order' => ['sometimes', 'integer', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}
```
</details>

<a id="file-apphttprequestsapiproductcategoryupdateproductcategoryrequestphp"></a>
### app\Http\Requests\Api\ProductCategory\UpdateProductCategoryRequest.php
- SHA: `22d5a93e4a94`  
- Ukuran: 760 B  
- Namespace: `App\Http\Requests\Api\ProductCategory`

**Class `UpdateProductCategoryRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\ProductCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('product_categories.update') ?? false;
    }

    public function rules(): array
    {
        $categoryId = $this->route('productCategory')->id;

        return [
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('product_categories', 'slug')->ignore($categoryId)],
            'sort_order' => ['sometimes', 'integer', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}
```
</details>

<a id="file-apphttprequestsapipromotionstorepromotionrequestphp"></a>
### app\Http\Requests\Api\Promotion\StorePromotionRequest.php
- SHA: `e9f6d9cfb0ed`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Promotion`

**Class `StorePromotionRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Promotion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePromotionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('promotions.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'promotion_type' => ['required', Rule::in(['discount', 'bundle', 'buy_x_get_y'])],
            'starts_at' => ['nullable', 'date'],
            'ends_at' => ['nullable', 'date'],
            'priority' => ['sometimes', 'integer'],
            'is_active' => ['sometimes', 'boolean'],

            'rules' => ['nullable', 'array'],
            'rules.*.rule_type' => ['required_with:rules', Rule::in(['min_total', 'product', 'category', 'outlet', 'channel', 'time'])],
            'rules.*.operator' => ['nullable', 'string', 'max:50'],
            'rules.*.value' => ['nullable'],
        ];
    }
}
```
</details>

<a id="file-apphttprequestsapipromotionupdatepromotionrequestphp"></a>
### app\Http\Requests\Api\Promotion\UpdatePromotionRequest.php
- SHA: `06d42f7f076d`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Promotion`

**Class `UpdatePromotionRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Promotion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePromotionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('promotions.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'promotion_type' => ['sometimes', 'required', Rule::in(['discount', 'bundle', 'buy_x_get_y'])],
            'starts_at' => ['nullable', 'date'],
            'ends_at' => ['nullable', 'date'],
            'priority' => ['sometimes', 'integer'],
            'is_active' => ['sometimes', 'boolean'],

            'rules' => ['sometimes', 'array'],
            'rules.*.rule_type' => ['required_with:rules', Rule::in(['min_total', 'product', 'category', 'outlet', 'channel', 'time'])],
            'rules.*.operator' => ['nullable', 'string', 'max:50'],
            'rules.*.value' => ['nullable'],
        ];
    }
}
```
</details>

<a id="file-apphttprequestsapipurchasinggoodsreceiptpostgoodsreceiptrequestphp"></a>
### app\Http\Requests\Api\Purchasing\GoodsReceipt\PostGoodsReceiptRequest.php
- SHA: `92dad139158f`  
- Ukuran: 349 B  
- Namespace: `App\Http\Requests\Api\Purchasing\GoodsReceipt`

**Class `PostGoodsReceiptRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Purchasing\GoodsReceipt;

use Illuminate\Foundation\Http\FormRequest;

class PostGoodsReceiptRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('goods_receipts.post') ?? false;
    }

    public function rules(): array
    {
        return [];
    }
}

```
</details>

<a id="file-apphttprequestsapipurchasinggoodsreceiptstoregoodsreceiptrequestphp"></a>
### app\Http\Requests\Api\Purchasing\GoodsReceipt\StoreGoodsReceiptRequest.php
- SHA: `f8dd74858cc7`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Purchasing\GoodsReceipt`

**Class `StoreGoodsReceiptRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Purchasing\GoodsReceipt;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreGoodsReceiptRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('goods_receipts.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'purchase_order_id' => ['required', 'integer', 'exists:purchase_orders,id'],
            'outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'receipt_number' => ['nullable', 'string', 'max:100', Rule::unique('goods_receipts', 'receipt_number')],
            'received_date' => ['required', 'date'],
            'status' => ['sometimes', Rule::in(['draft', 'posted', 'cancelled'])],
            'notes' => ['nullable', 'string'],
            'items' => ['required', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required', 'integer', 'exists:raw_materials,id'],
            'items.*.unit_id' => ['required', 'integer', 'exists:units,id'],
            'items.*.qty_received' => ['required', 'numeric', 'gt:0'],
            'items.*.unit_cost' => ['required', 'numeric', 'min:0'],
            'items.*.expired_at' => ['nullable', 'date'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapipurchasinggoodsreceiptupdategoodsreceiptrequestphp"></a>
### app\Http\Requests\Api\Purchasing\GoodsReceipt\UpdateGoodsReceiptRequest.php
- SHA: `d32e9853f2b0`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Purchasing\GoodsReceipt`

**Class `UpdateGoodsReceiptRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Purchasing\GoodsReceipt;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateGoodsReceiptRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('goods_receipts.update') ?? false;
    }

    public function rules(): array
    {
        $goodsReceiptId = $this->route('goodsReceipt')->id;

        return [
            'purchase_order_id' => ['sometimes', 'required', 'integer', 'exists:purchase_orders,id'],
            'outlet_id' => ['sometimes', 'required', 'integer', 'exists:outlets,id'],
            'receipt_number' => ['nullable', 'string', 'max:100', Rule::unique('goods_receipts', 'receipt_number')->ignore($goodsReceiptId)],
            'received_date' => ['sometimes', 'required', 'date'],
            'notes' => ['nullable', 'string'],
            'items' => ['sometimes', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required_with:items', 'integer', 'exists:raw_materials,id'],
            'items.*.unit_id' => ['required_with:items', 'integer', 'exists:units,id'],
            'items.*.qty_received' => ['required_with:items', 'numeric', 'gt:0'],
            'items.*.unit_cost' => ['required_with:items', 'numeric', 'min:0'],
            'items.*.expired_at' => ['nullable', 'date'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapipurchasingpurchaseorderstorepurchaseorderrequestphp"></a>
### app\Http\Requests\Api\Purchasing\PurchaseOrder\StorePurchaseOrderRequest.php
- SHA: `8609c250d3eb`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Requests\Api\Purchasing\PurchaseOrder`

**Class `StorePurchaseOrderRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Purchasing\PurchaseOrder;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePurchaseOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('purchase_orders.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'supplier_id' => ['required', 'integer', 'exists:suppliers,id'],
            'po_number' => ['nullable', 'string', 'max:100', Rule::unique('purchase_orders', 'po_number')],
            'status' => ['sometimes', Rule::in(['draft', 'approved', 'partial_received', 'received', 'cancelled'])],
            'order_date' => ['required', 'date'],
            'expected_date' => ['nullable', 'date'],
            'discount_amount' => ['sometimes', 'numeric', 'min:0'],
            'tax_amount' => ['sometimes', 'numeric', 'min:0'],
            'notes' => ['nullable', 'string'],
            'items' => ['required', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required', 'integer', 'exists:raw_materials,id'],
            'items.*.unit_id' => ['required', 'integer', 'exists:units,id'],
            'items.*.qty_ordered' => ['required', 'numeric', 'gt:0'],
            'items.*.unit_price' => ['required', 'numeric', 'min:0'],
            'items.*.discount_amount' => ['sometimes', 'numeric', 'min:0'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapipurchasingpurchaseorderupdatepurchaseorderrequestphp"></a>
### app\Http\Requests\Api\Purchasing\PurchaseOrder\UpdatePurchaseOrderRequest.php
- SHA: `826f1a158346`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Requests\Api\Purchasing\PurchaseOrder`

**Class `UpdatePurchaseOrderRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Purchasing\PurchaseOrder;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePurchaseOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('purchase_orders.update') ?? false;
    }

    public function rules(): array
    {
        $purchaseOrderId = $this->route('purchaseOrder')->id;

        return [
            'outlet_id' => ['sometimes', 'required', 'integer', 'exists:outlets,id'],
            'supplier_id' => ['sometimes', 'required', 'integer', 'exists:suppliers,id'],
            'po_number' => ['nullable', 'string', 'max:100', Rule::unique('purchase_orders', 'po_number')->ignore($purchaseOrderId)],
            'order_date' => ['sometimes', 'required', 'date'],
            'expected_date' => ['nullable', 'date'],
            'discount_amount' => ['sometimes', 'numeric', 'min:0'],
            'tax_amount' => ['sometimes', 'numeric', 'min:0'],
            'notes' => ['nullable', 'string'],
            'items' => ['sometimes', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required_with:items', 'integer', 'exists:raw_materials,id'],
            'items.*.unit_id' => ['required_with:items', 'integer', 'exists:units,id'],
            'items.*.qty_ordered' => ['required_with:items', 'numeric', 'gt:0'],
            'items.*.unit_price' => ['required_with:items', 'numeric', 'min:0'],
            'items.*.discount_amount' => ['sometimes', 'numeric', 'min:0'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapipurchasingsupplierstoresupplierrequestphp"></a>
### app\Http\Requests\Api\Purchasing\Supplier\StoreSupplierRequest.php
- SHA: `e66258244705`  
- Ukuran: 869 B  
- Namespace: `App\Http\Requests\Api\Purchasing\Supplier`

**Class `StoreSupplierRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Purchasing\Supplier;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSupplierRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('suppliers.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'code' => ['nullable', 'string', 'max:100', Rule::unique('suppliers', 'code')],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:255'],
            'address' => ['nullable', 'string'],
            'city' => ['nullable', 'string', 'max:100'],
            'contact_person' => ['nullable', 'string', 'max:255'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapipurchasingsupplierupdatesupplierrequestphp"></a>
### app\Http\Requests\Api\Purchasing\Supplier\UpdateSupplierRequest.php
- SHA: `cd7752620749`  
- Ukuran: 957 B  
- Namespace: `App\Http\Requests\Api\Purchasing\Supplier`

**Class `UpdateSupplierRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Purchasing\Supplier;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSupplierRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('suppliers.update') ?? false;
    }

    public function rules(): array
    {
        $supplierId = $this->route('supplier')->id;

        return [
            'code' => ['nullable', 'string', 'max:100', Rule::unique('suppliers', 'code')->ignore($supplierId)],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:255'],
            'address' => ['nullable', 'string'],
            'city' => ['nullable', 'string', 'max:100'],
            'contact_person' => ['nullable', 'string', 'max:255'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapireportreportfilterrequestphp"></a>
### app\Http\Requests\Api\Report\ReportFilterRequest.php
- SHA: `dd31a5c34ba3`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Requests\Api\Report`

**Class `ReportFilterRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Report;

use Illuminate\Foundation\Http\FormRequest;

class ReportFilterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('reports.view') === true;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['nullable', 'integer', 'exists:outlets,id'],
            'cashier_id' => ['nullable', 'integer', 'exists:users,id'],
            'payment_method_id' => ['nullable', 'integer', 'exists:payment_methods,id'],
            'product_id' => ['nullable', 'integer', 'exists:products,id'],
            'raw_material_id' => ['nullable', 'integer', 'exists:raw_materials,id'],
            'supplier_id' => ['nullable', 'integer', 'exists:suppliers,id'],
            'expense_category_id' => ['nullable', 'integer', 'exists:expense_categories,id'],
            'status' => ['nullable', 'string', 'max:50'],
            'date_from' => ['nullable', 'date'],
            'date_until' => ['nullable', 'date', 'after_or_equal:date_from'],
            'group_by' => ['nullable', 'string', 'in:day,week,month'],
            'limit' => ['nullable', 'integer', 'min:1', 'max:100'],
            'per_page' => ['nullable', 'integer', 'min:1', 'max:100'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'group_by' => $this->input('group_by', 'day'),
            'limit' => $this->input('limit', 10),
            'per_page' => $this->input('per_page', 10),
        ]);
    }
}

```
</details>

<a id="file-apphttprequestsapirolestorerolerequestphp"></a>
### app\Http\Requests\Api\Role\StoreRoleRequest.php
- SHA: `56007c9924c8`  
- Ukuran: 567 B  
- Namespace: `App\Http\Requests\Api\Role`

**Class `StoreRoleRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Role;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRoleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('roles.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100', Rule::unique('roles', 'name')],
            'permissions' => ['nullable', 'array'],
            'permissions.*' => ['string', 'exists:permissions,name'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiroleupdaterolerequestphp"></a>
### app\Http\Requests\Api\Role\UpdateRoleRequest.php
- SHA: `9ae54339b6fd`  
- Ukuran: 630 B  
- Namespace: `App\Http\Requests\Api\Role`

**Class `UpdateRoleRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Role;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRoleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('roles.update') ?? false;
    }

    public function rules(): array
    {
        $roleId = $this->route('role')->id;

        return [
            'name' => ['required', 'string', 'max:100', Rule::unique('roles', 'name')->ignore($roleId)],
            'permissions' => ['nullable', 'array'],
            'permissions.*' => ['string', 'exists:permissions,name'],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapisystemsettingupsertsystemsettingrequestphp"></a>
### app\Http\Requests\Api\SystemSetting\UpsertSystemSettingRequest.php
- SHA: `362962d56221`  
- Ukuran: 657 B  
- Namespace: `App\Http\Requests\Api\SystemSetting`

**Class `UpsertSystemSettingRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\SystemSetting;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpsertSystemSettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('system_settings.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'settings' => ['required', 'array', 'min:1'],
            'settings.*.key' => ['required', 'string', 'max:150'],
            'settings.*.value' => ['nullable'],
            'settings.*.type' => ['required', Rule::in(['string', 'number', 'boolean', 'json'])],
        ];
    }
}

```
</details>

<a id="file-apphttprequestsapiuserstoreuserrequestphp"></a>
### app\Http\Requests\Api\User\StoreUserRequest.php
- SHA: `f6a1a4ba9a6c`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\User`

**Class `StoreUserRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('users.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255', 'required_without_all:phone,username', Rule::unique('users', 'email')],
            'phone' => ['nullable', 'string', 'max:50', 'required_without_all:email,username', Rule::unique('users', 'phone')],
            'username' => ['nullable', 'string', 'max:100', 'required_without_all:email,phone', Rule::unique('users', 'username')],
            'password' => ['required', 'confirmed', Password::defaults()],
            'is_active' => ['sometimes', 'boolean'],
            'user_type' => ['nullable', Rule::in(['superadmin', 'staff', 'owner_viewer'])],
            'roles' => ['required', 'array', 'min:1'],
            'roles.*' => ['string', 'exists:roles,name'],

            'outlet_ids' => ['nullable', 'array'],
            'outlet_ids.*' => ['integer', 'exists:outlets,id'],
            'default_outlet_id' => ['nullable', 'integer', 'exists:outlets,id'],
        ];
    }
}
```
</details>

<a id="file-apphttprequestsapiuserupdateuserrequestphp"></a>
### app\Http\Requests\Api\User\UpdateUserRequest.php
- SHA: `2150a6d77c4f`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\User`

**Class `UpdateUserRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('users.update') ?? false;
    }

    public function rules(): array
    {
        $userId = $this->route('user')->id;

        return [
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255', 'required_without_all:phone,username', Rule::unique('users', 'email')->ignore($userId)],
            'phone' => ['nullable', 'string', 'max:50', 'required_without_all:email,username', Rule::unique('users', 'phone')->ignore($userId)],
            'username' => ['nullable', 'string', 'max:100', 'required_without_all:email,phone', Rule::unique('users', 'username')->ignore($userId)],
            'password' => ['nullable', 'confirmed', Password::defaults()],
            'is_active' => ['sometimes', 'boolean'],
            'user_type' => ['nullable', Rule::in(['superadmin', 'staff', 'owner_viewer'])],
            'roles' => ['sometimes', 'array', 'min:1'],
            'roles.*' => ['string', 'exists:roles,name'],

            'outlet_ids' => ['sometimes', 'array'],
            'outlet_ids.*' => ['integer', 'exists:outlets,id'],
            'default_outlet_id' => ['nullable', 'integer', 'exists:outlets,id'],
        ];
    }
}
```
</details>

<a id="file-apphttprequestsapivoucherstorevoucherrequestphp"></a>
### app\Http\Requests\Api\Voucher\StoreVoucherRequest.php
- SHA: `436f2e74d123`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Voucher`

**Class `StoreVoucherRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Voucher;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreVoucherRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('vouchers.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'code' => ['required', 'string', 'max:100', Rule::unique('vouchers', 'code')],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'discount_type' => ['required', Rule::in(['percent', 'fixed'])],
            'discount_value' => ['required', 'numeric', 'min:0'],
            'max_discount' => ['nullable', 'numeric', 'min:0'],
            'min_order_total' => ['sometimes', 'numeric', 'min:0'],
            'quota' => ['nullable', 'integer', 'min:1'],
            'used_count' => ['sometimes', 'integer', 'min:0'],
            'starts_at' => ['nullable', 'date'],
            'ends_at' => ['nullable', 'date'],
            'is_active' => ['sometimes', 'boolean'],
            'applies_to' => ['required', Rule::in(['all', 'specific_products', 'specific_categories'])],
        ];
    }
}
```
</details>

<a id="file-apphttprequestsapivoucherupdatevoucherrequestphp"></a>
### app\Http\Requests\Api\Voucher\UpdateVoucherRequest.php
- SHA: `035c34e02137`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Requests\Api\Voucher`

**Class `UpdateVoucherRequest` extends `FormRequest`**

Metode Publik:
- **authorize**() : *bool*
- **rules**() : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Requests\Api\Voucher;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateVoucherRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('vouchers.update') ?? false;
    }

    public function rules(): array
    {
        $voucherId = $this->route('voucher')->id;

        return [
            'code' => ['sometimes', 'required', 'string', 'max:100', Rule::unique('vouchers', 'code')->ignore($voucherId)],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'discount_type' => ['sometimes', 'required', Rule::in(['percent', 'fixed'])],
            'discount_value' => ['sometimes', 'required', 'numeric', 'min:0'],
            'max_discount' => ['nullable', 'numeric', 'min:0'],
            'min_order_total' => ['sometimes', 'numeric', 'min:0'],
            'quota' => ['nullable', 'integer', 'min:1'],
            'used_count' => ['sometimes', 'integer', 'min:0'],
            'starts_at' => ['nullable', 'date'],
            'ends_at' => ['nullable', 'date'],
            'is_active' => ['sometimes', 'boolean'],
            'applies_to' => ['sometimes', 'required', Rule::in(['all', 'specific_products', 'specific_categories'])],
        ];
    }
}
```
</details>


## API Resources (app/Http/Resources)

<a id="file-apphttpresourcescashiershiftresourcephp"></a>
### app\Http\Resources\CashierShiftResource.php
- SHA: `f9427b914876`  
- Ukuran: 3 KB  
- Namespace: `App\Http\Resources`

**Class `CashierShiftResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CashierShiftResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $orders = $this->whenLoaded('orders', fn () => $this->orders);
        $cashMovements = $this->whenLoaded('cashMovements', fn () => $this->cashMovements);

        $cashSalesTotal = $this->relationLoaded('orders')
            ? (float) $this->orders->flatMap(fn ($order) => $order->relationLoaded('payments') ? $order->payments : collect())
                ->filter(fn ($payment) => $payment->status === 'paid' && $payment->relationLoaded('paymentMethod') && $payment->paymentMethod?->type === 'cash')
                ->sum('amount')
            : null;

        $cashInTotal = $this->relationLoaded('cashMovements')
            ? (float) $this->cashMovements->where('movement_type', 'cash_in')->sum('amount')
            : null;

        $cashOutTotal = $this->relationLoaded('cashMovements')
            ? (float) $this->cashMovements->where('movement_type', 'cash_out')->sum('amount')
            : null;

        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'outlet' => $this->whenLoaded('outlet', fn () => [
                'id' => $this->outlet?->id,
                'code' => $this->outlet?->code,
                'name' => $this->outlet?->name,
            ]),
            'user_id' => $this->user_id,
            'user' => $this->whenLoaded('user', fn () => [
                'id' => $this->user?->id,
                'name' => $this->user?->name,
                'username' => $this->user?->username,
            ]),
            'shift_number' => $this->shift_number,
            'opened_at' => $this->opened_at,
            'closed_at' => $this->closed_at,
            'opening_cash' => (float) $this->opening_cash,
            'expected_cash' => (float) $this->expected_cash,
            'closing_cash' => (float) $this->closing_cash,
            'cash_difference' => (float) $this->cash_difference,
            'status' => $this->status,
            'notes' => $this->notes,
            'orders_count' => $this->whenCounted('orders'),
            'cash_sales_total' => $cashSalesTotal,
            'cash_in_total' => $cashInTotal,
            'cash_out_total' => $cashOutTotal,
            'cash_movements' => CashMovementResource::collection($cashMovements ?? []),
            'orders' => $this->whenLoaded('orders', function () {
                return $this->orders->map(function ($order) {
                    return [
                        'id' => $order->id,
                        'order_number' => $order->order_number,
                        'grand_total' => (float) $order->grand_total,
                        'paid_total' => (float) $order->paid_total,
                        'payment_status' => $order->payment_status,
                    ];
                });
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcescashmovementresourcephp"></a>
### app\Http\Resources\CashMovementResource.php
- SHA: `7d20f87bdfec`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Resources`

**Class `CashMovementResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CashMovementResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'cashier_shift_id' => $this->cashier_shift_id,
            'cashier_shift' => $this->whenLoaded('cashierShift', fn () => [
                'id' => $this->cashierShift?->id,
                'shift_number' => $this->cashierShift?->shift_number,
                'status' => $this->cashierShift?->status,
                'outlet_id' => $this->cashierShift?->outlet_id,
            ]),
            'movement_type' => $this->movement_type,
            'amount' => (float) $this->amount,
            'reason' => $this->reason,
            'notes' => $this->notes,
            'created_by' => $this->created_by,
            'creator' => $this->whenLoaded('creator', fn () => [
                'id' => $this->creator?->id,
                'name' => $this->creator?->name,
            ]),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcescourierresourcephp"></a>
### app\Http\Resources\CourierResource.php
- SHA: `2846b2d5855b`  
- Ukuran: 661 B  
- Namespace: `App\Http\Resources`

**Class `CourierResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourierResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'vehicle_number' => $this->vehicle_number,
            'is_active' => (bool) $this->is_active,
            'deliveries_count' => $this->whenCounted('deliveries'),
            'created_at' => $this->created_at?->toISOString(),
            'updated_at' => $this->updated_at?->toISOString(),
        ];
    }
}

```
</details>

<a id="file-apphttpresourcescustomeraddressresourcephp"></a>
### app\Http\Resources\CustomerAddressResource.php
- SHA: `dc3eab6a1caa`  
- Ukuran: 890 B  
- Namespace: `App\Http\Resources`

**Class `CustomerAddressResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerAddressResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'customer_id' => $this->customer_id,
            'label' => $this->label,
            'recipient_name' => $this->recipient_name,
            'recipient_phone' => $this->recipient_phone,
            'address' => $this->address,
            'city' => $this->city,
            'province' => $this->province,
            'postal_code' => $this->postal_code,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'is_default' => $this->is_default,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcescustomerresourcephp"></a>
### app\Http\Resources\CustomerResource.php
- SHA: `eaaf7c99c9c6`  
- Ukuran: 942 B  
- Namespace: `App\Http\Resources`

**Class `CustomerResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'gender' => $this->gender,
            'birth_date' => $this->birth_date?->toDateString(),
            'points' => $this->points,
            'total_spent' => $this->total_spent,
            'is_member' => $this->is_member,
            'notes' => $this->notes,
            'addresses' => CustomerAddressResource::collection($this->whenLoaded('addresses')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcesdeliveryresourcephp"></a>
### app\Http\Resources\DeliveryResource.php
- SHA: `8d8997b1dd36`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Resources`

**Class `DeliveryResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DeliveryResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'order_id' => $this->order_id,
            'customer_address_id' => $this->customer_address_id,
            'courier_id' => $this->courier_id,
            'delivery_status' => $this->delivery_status,
            'delivery_fee' => $this->delivery_fee,
            'delivered_at' => $this->delivered_at?->toISOString(),
            'notes' => $this->notes,
            'order' => new OrderResource($this->whenLoaded('order')),
            'customer_address' => new CustomerAddressResource($this->whenLoaded('customerAddress')),
            'courier' => new CourierResource($this->whenLoaded('courier')),
            'created_at' => $this->created_at?->toISOString(),
            'updated_at' => $this->updated_at?->toISOString(),
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesexpenseattachmentresourcephp"></a>
### app\Http\Resources\ExpenseAttachmentResource.php
- SHA: `990479864e73`  
- Ukuran: 730 B  
- Namespace: `App\Http\Resources`

**Class `ExpenseAttachmentResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ExpenseAttachmentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'expense_id' => $this->expense_id,
            'file_path' => $this->file_path,
            'file_url' => $this->file_path ? Storage::url($this->file_path) : null,
            'file_name' => $this->file_name,
            'mime_type' => $this->mime_type,
            'created_at' => $this->created_at?->toISOString(),
            'updated_at' => $this->updated_at?->toISOString(),
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesexpensecategoryresourcephp"></a>
### app\Http\Resources\ExpenseCategoryResource.php
- SHA: `1ef40c5b968f`  
- Ukuran: 573 B  
- Namespace: `App\Http\Resources`

**Class `ExpenseCategoryResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExpenseCategoryResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'is_active' => (bool) $this->is_active,
            'expenses_count' => $this->whenCounted('expenses'),
            'created_at' => $this->created_at?->toISOString(),
            'updated_at' => $this->updated_at?->toISOString(),
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesexpenseresourcephp"></a>
### app\Http\Resources\ExpenseResource.php
- SHA: `51b668d7d7de`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Resources`

**Class `ExpenseResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExpenseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'expense_category_id' => $this->expense_category_id,
            'expense_date' => $this->expense_date?->toDateString(),
            'amount' => (float) $this->amount,
            'description' => $this->description,
            'status' => $this->status,
            'created_by' => $this->created_by,
            'approved_by' => $this->approved_by,
            'approved_at' => $this->approved_at?->toISOString(),
            'outlet' => new OutletResource($this->whenLoaded('outlet')),
            'category' => new ExpenseCategoryResource($this->whenLoaded('category')),
            'creator' => new UserResource($this->whenLoaded('creator')),
            'approver' => new UserResource($this->whenLoaded('approver')),
            'attachments' => ExpenseAttachmentResource::collection($this->whenLoaded('attachments')),
            'attachments_count' => $this->whenCounted('attachments'),
            'created_at' => $this->created_at?->toISOString(),
            'updated_at' => $this->updated_at?->toISOString(),
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesgoodsreceiptitemresourcephp"></a>
### app\Http\Resources\GoodsReceiptItemResource.php
- SHA: `4f041367a324`  
- Ukuran: 993 B  
- Namespace: `App\Http\Resources`

**Class `GoodsReceiptItemResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GoodsReceiptItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'goods_receipt_id' => $this->goods_receipt_id,
            'raw_material_id' => $this->raw_material_id,
            'raw_material_name' => $this->rawMaterial?->name,
            'raw_material_code' => $this->rawMaterial?->code,
            'unit_id' => $this->unit_id,
            'unit_name' => $this->unit?->name,
            'unit_code' => $this->unit?->code,
            'qty_received' => $this->qty_received,
            'unit_cost' => $this->unit_cost,
            'line_total' => $this->line_total,
            'expired_at' => $this->expired_at,
            'notes' => $this->notes,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesgoodsreceiptresourcephp"></a>
### app\Http\Resources\GoodsReceiptResource.php
- SHA: `a7840fc18d17`  
- Ukuran: 997 B  
- Namespace: `App\Http\Resources`

**Class `GoodsReceiptResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GoodsReceiptResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'purchase_order_id' => $this->purchase_order_id,
            'purchase_order_number' => $this->purchaseOrder?->po_number,
            'outlet_id' => $this->outlet_id,
            'outlet_name' => $this->outlet?->name,
            'receipt_number' => $this->receipt_number,
            'received_date' => $this->received_date,
            'status' => $this->status,
            'notes' => $this->notes,
            'received_by' => $this->received_by,
            'received_by_name' => $this->receiver?->name,
            'items' => GoodsReceiptItemResource::collection($this->whenLoaded('items')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourceskitchenticketitemresourcephp"></a>
### app\Http\Resources\KitchenTicketItemResource.php
- SHA: `a513949de5c4`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Resources`

**Class `KitchenTicketItemResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KitchenTicketItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'kitchen_ticket_id' => $this->kitchen_ticket_id,
            'order_item_id' => $this->order_item_id,
            'item_name_snapshot' => $this->item_name_snapshot,
            'qty' => $this->qty,
            'notes' => $this->notes,
            'order_item' => $this->whenLoaded('orderItem', function () {
                return [
                    'id' => $this->orderItem?->id,
                    'product_id' => $this->orderItem?->product_id,
                    'product_name_snapshot' => $this->orderItem?->product_name_snapshot,
                    'sku_snapshot' => $this->orderItem?->sku_snapshot,
                    'qty' => $this->orderItem?->qty,
                    'unit_price' => $this->orderItem?->unit_price,
                    'discount_amount' => $this->orderItem?->discount_amount,
                    'line_total' => $this->orderItem?->line_total,
                    'notes' => $this->orderItem?->notes,
                ];
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourceskitchenticketresourcephp"></a>
### app\Http\Resources\KitchenTicketResource.php
- SHA: `941a3704b6c5`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Resources`

**Class `KitchenTicketResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KitchenTicketResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'order_id' => $this->order_id,
            'ticket_number' => $this->ticket_number,
            'status' => $this->status,
            'printed_at' => $this->printed_at,
            'prepared_at' => $this->prepared_at,
            'ready_at' => $this->ready_at,
            'order' => $this->whenLoaded('order', function () {
                return [
                    'id' => $this->order?->id,
                    'order_number' => $this->order?->order_number,
                    'queue_number' => $this->order?->queue_number,
                    'order_channel' => $this->order?->order_channel,
                    'order_status' => $this->order?->order_status,
                    'payment_status' => $this->order?->payment_status,
                    'outlet_id' => $this->order?->outlet_id,
                    'outlet' => $this->order?->relationLoaded('outlet') ? [
                        'id' => $this->order?->outlet?->id,
                        'code' => $this->order?->outlet?->code,
                        'name' => $this->order?->outlet?->name,
                    ] : null,
                    'customer' => $this->order?->relationLoaded('customer') ? [
                        'id' => $this->order?->customer?->id,
                        'code' => $this->order?->customer?->code,
                        'name' => $this->order?->customer?->name,
                        'phone' => $this->order?->customer?->phone,
                    ] : null,
                    'ordered_at' => $this->order?->ordered_at,
                    'notes' => $this->order?->notes,
                ];
            }),
            'items' => KitchenTicketItemResource::collection($this->whenLoaded('items')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesorderitemmodifierresourcephp"></a>
### app\Http\Resources\OrderItemModifierResource.php
- SHA: `1ef45a5183cc`  
- Ukuran: 646 B  
- Namespace: `App\Http\Resources`

**Class `OrderItemModifierResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderItemModifierResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'modifier_group_name_snapshot' => $this->modifier_group_name_snapshot,
            'modifier_option_name_snapshot' => $this->modifier_option_name_snapshot,
            'qty' => (float) $this->qty,
            'price' => (float) $this->price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesorderitemresourcephp"></a>
### app\Http\Resources\OrderItemResource.php
- SHA: `9074a62c2555`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Resources`

**Class `OrderItemResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'product' => $this->whenLoaded('product', fn () => [
                'id' => $this->product?->id,
                'name' => $this->product?->name,
                'sku' => $this->product?->sku,
                'code' => $this->product?->code,
            ]),
            'product_name_snapshot' => $this->product_name_snapshot,
            'sku_snapshot' => $this->sku_snapshot,
            'qty' => (float) $this->qty,
            'unit_price' => (float) $this->unit_price,
            'discount_amount' => (float) $this->discount_amount,
            'line_total' => (float) $this->line_total,
            'notes' => $this->notes,
            'variants' => OrderItemVariantResource::collection($this->whenLoaded('variants')),
            'modifiers' => OrderItemModifierResource::collection($this->whenLoaded('modifiers')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesorderitemvariantresourcephp"></a>
### app\Http\Resources\OrderItemVariantResource.php
- SHA: `ebd8e7679993`  
- Ukuran: 622 B  
- Namespace: `App\Http\Resources`

**Class `OrderItemVariantResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderItemVariantResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'variant_group_name_snapshot' => $this->variant_group_name_snapshot,
            'variant_option_name_snapshot' => $this->variant_option_name_snapshot,
            'price_adjustment' => (float) $this->price_adjustment,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesorderresourcephp"></a>
### app\Http\Resources\OrderResource.php
- SHA: `84eba7439b96`  
- Ukuran: 4 KB  
- Namespace: `App\Http\Resources`

**Class `OrderResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'outlet' => $this->whenLoaded('outlet', fn () => [
                'id' => $this->outlet?->id,
                'code' => $this->outlet?->code,
                'name' => $this->outlet?->name,
            ]),
            'cashier_shift_id' => $this->cashier_shift_id,
            'cashier_shift' => $this->whenLoaded('cashierShift', fn () => [
                'id' => $this->cashierShift?->id,
                'shift_number' => $this->cashierShift?->shift_number,
                'status' => $this->cashierShift?->status,
            ]),
            'customer_id' => $this->customer_id,
            'customer' => $this->whenLoaded('customer', fn () => [
                'id' => $this->customer?->id,
                'code' => $this->customer?->code,
                'name' => $this->customer?->name,
                'phone' => $this->customer?->phone,
            ]),
            'order_number' => $this->order_number,
            'queue_number' => $this->queue_number,
            'order_channel' => $this->order_channel,
            'order_status' => $this->order_status,
            'payment_status' => $this->payment_status,
            'subtotal' => (float) $this->subtotal,
            'discount_amount' => (float) $this->discount_amount,
            'tax_amount' => (float) $this->tax_amount,
            'service_charge_amount' => (float) $this->service_charge_amount,
            'grand_total' => (float) $this->grand_total,
            'paid_total' => (float) $this->paid_total,
            'change_amount' => (float) $this->change_amount,
            'notes' => $this->notes,
            'ordered_at' => $this->ordered_at,
            'completed_at' => $this->completed_at,
            'cancelled_at' => $this->cancelled_at,
            'cancelled_by' => $this->cancelled_by,
            'canceller' => $this->whenLoaded('canceller', fn () => [
                'id' => $this->canceller?->id,
                'name' => $this->canceller?->name,
            ]),
            'created_by' => $this->created_by,
            'creator' => $this->whenLoaded('creator', fn () => [
                'id' => $this->creator?->id,
                'name' => $this->creator?->name,
            ]),
            'items' => OrderItemResource::collection($this->whenLoaded('items')),
            'payments' => PaymentResource::collection($this->whenLoaded('payments')),
            'status_histories' => $this->whenLoaded('statusHistories', function () {
                return $this->statusHistories->map(function ($history) {
                    return [
                        'id' => $history->id,
                        'status' => $history->status,
                        'changed_by' => $history->changed_by,
                        'changer' => $history->relationLoaded('changer') ? [
                            'id' => $history->changer?->id,
                            'name' => $history->changer?->name,
                        ] : null,
                        'notes' => $history->notes,
                        'changed_at' => $history->changed_at,
                        'created_at' => $history->created_at,
                        'updated_at' => $history->updated_at,
                    ];
                });
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesoutletmaterialstockresourcephp"></a>
### app\Http\Resources\OutletMaterialStockResource.php
- SHA: `fd9d684bc04c`  
- Ukuran: 881 B  
- Namespace: `App\Http\Resources`

**Class `OutletMaterialStockResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OutletMaterialStockResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'outlet_name' => $this->outlet?->name,
            'outlet_code' => $this->outlet?->code,
            'raw_material_id' => $this->raw_material_id,
            'raw_material_name' => $this->rawMaterial?->name,
            'raw_material_code' => $this->rawMaterial?->code,
            'qty_on_hand' => $this->qty_on_hand,
            'qty_reserved' => $this->qty_reserved,
            'last_movement_at' => $this->last_movement_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesoutletresourcephp"></a>
### app\Http\Resources\OutletResource.php
- SHA: `ee02964067b6`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Resources`

**Class `OutletResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OutletResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
            'city' => $this->city,
            'province' => $this->province,
            'postal_code' => $this->postal_code,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'opening_time' => $this->opening_time,
            'closing_time' => $this->closing_time,
            'is_active' => $this->is_active,
            'setting' => new OutletSettingResource($this->whenLoaded('setting')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesoutletsettingresourcephp"></a>
### app\Http\Resources\OutletSettingResource.php
- SHA: `5c352a02e571`  
- Ukuran: 964 B  
- Namespace: `App\Http\Resources`

**Class `OutletSettingResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OutletSettingResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'tax_percent' => $this->tax_percent,
            'service_charge_percent' => $this->service_charge_percent,
            'currency_code' => $this->currency_code,
            'receipt_footer' => $this->receipt_footer,
            'invoice_prefix' => $this->invoice_prefix,
            'order_prefix' => $this->order_prefix,
            'timezone' => $this->timezone,
            'allow_negative_stock' => $this->allow_negative_stock,
            'low_stock_notification_enabled' => $this->low_stock_notification_enabled,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcespaymentmethodresourcephp"></a>
### app\Http\Resources\PaymentMethodResource.php
- SHA: `f74963b7f2dd`  
- Ukuran: 602 B  
- Namespace: `App\Http\Resources`

**Class `PaymentMethodResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentMethodResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'name' => $this->name,
            'type' => $this->type,
            'is_active' => $this->is_active,
            'payments_count' => $this->whenCounted('payments'),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcespaymentresourcephp"></a>
### app\Http\Resources\PaymentResource.php
- SHA: `f2b0e40876bc`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Resources`

**Class `PaymentResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'order_id' => $this->order_id,
            'order' => $this->whenLoaded('order', fn () => [
                'id' => $this->order?->id,
                'order_number' => $this->order?->order_number,
                'outlet_id' => $this->order?->outlet_id,
                'cashier_shift_id' => $this->order?->cashier_shift_id,
                'grand_total' => (float) ($this->order?->grand_total ?? 0),
                'paid_total' => (float) ($this->order?->paid_total ?? 0),
                'payment_status' => $this->order?->payment_status,
            ]),
            'payment_method_id' => $this->payment_method_id,
            'payment_method' => $this->whenLoaded('paymentMethod', fn () => [
                'id' => $this->paymentMethod?->id,
                'code' => $this->paymentMethod?->code,
                'name' => $this->paymentMethod?->name,
                'type' => $this->paymentMethod?->type,
            ]),
            'amount' => (float) $this->amount,
            'reference_number' => $this->reference_number,
            'paid_at' => $this->paid_at,
            'status' => $this->status,
            'notes' => $this->notes,
            'received_by' => $this->received_by,
            'receiver' => $this->whenLoaded('receiver', fn () => [
                'id' => $this->receiver?->id,
                'name' => $this->receiver?->name,
            ]),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcespermissionresourcephp"></a>
### app\Http\Resources\PermissionResource.php
- SHA: `ddfa379b8897`  
- Ukuran: 467 B  
- Namespace: `App\Http\Resources`

**Class `PermissionResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PermissionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'guard_name' => $this->guard_name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesproductbomitemresourcephp"></a>
### app\Http\Resources\ProductBomItemResource.php
- SHA: `dd15cc4128c7`  
- Ukuran: 846 B  
- Namespace: `App\Http\Resources`

**Class `ProductBomItemResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductBomItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_bom_id' => $this->product_bom_id,
            'raw_material_id' => $this->raw_material_id,
            'raw_material_name' => $this->rawMaterial?->name,
            'raw_material_code' => $this->rawMaterial?->code,
            'unit_id' => $this->unit_id,
            'unit_name' => $this->unit?->name,
            'unit_code' => $this->unit?->code,
            'qty' => $this->qty,
            'waste_percent' => $this->waste_percent,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesproductbomresourcephp"></a>
### app\Http\Resources\ProductBomResource.php
- SHA: `e64e4b039456`  
- Ukuran: 748 B  
- Namespace: `App\Http\Resources`

**Class `ProductBomResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductBomResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'product_name' => $this->product?->name,
            'product_code' => $this->product?->code,
            'version' => $this->version,
            'is_active' => $this->is_active,
            'notes' => $this->notes,
            'items' => ProductBomItemResource::collection($this->whenLoaded('items')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesproductbundleitemresourcephp"></a>
### app\Http\Resources\ProductBundleItemResource.php
- SHA: `9f89169b71b4`  
- Ukuran: 671 B  
- Namespace: `App\Http\Resources`

**Class `ProductBundleItemResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductBundleItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'bundled_product_id' => $this->bundled_product_id,
            'bundled_product_name' => $this->bundledProduct?->name,
            'bundled_product_code' => $this->bundledProduct?->code,
            'qty' => $this->qty,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesproductcategoryresourcephp"></a>
### app\Http\Resources\ProductCategoryResource.php
- SHA: `e4b8aa020397`  
- Ukuran: 662 B  
- Namespace: `App\Http\Resources`

**Class `ProductCategoryResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductCategoryResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'sort_order' => $this->sort_order,
            'is_active' => $this->is_active,
            'products_count' => $this->whenCounted('products'),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcesproductmodifiergroupresourcephp"></a>
### app\Http\Resources\ProductModifierGroupResource.php
- SHA: `250e72393278`  
- Ukuran: 764 B  
- Namespace: `App\Http\Resources`

**Class `ProductModifierGroupResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductModifierGroupResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'name' => $this->name,
            'min_select' => $this->min_select,
            'max_select' => $this->max_select,
            'is_required' => $this->is_required,
            'sort_order' => $this->sort_order,
            'options' => ProductModifierOptionResource::collection($this->whenLoaded('options')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcesproductmodifieroptionresourcephp"></a>
### app\Http\Resources\ProductModifierOptionResource.php
- SHA: `f5ee65fec14c`  
- Ukuran: 636 B  
- Namespace: `App\Http\Resources`

**Class `ProductModifierOptionResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductModifierOptionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_modifier_group_id' => $this->product_modifier_group_id,
            'name' => $this->name,
            'price' => $this->price,
            'is_active' => $this->is_active,
            'sort_order' => $this->sort_order,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcesproductoutletstatusresourcephp"></a>
### app\Http\Resources\ProductOutletStatusResource.php
- SHA: `7bd88aa5aff6`  
- Ukuran: 722 B  
- Namespace: `App\Http\Resources`

**Class `ProductOutletStatusResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductOutletStatusResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'outlet_name' => $this->outlet?->name,
            'outlet_code' => $this->outlet?->code,
            'is_available' => $this->is_available,
            'is_hidden' => $this->is_hidden,
            'daily_limit' => $this->daily_limit,
            'notes' => $this->notes,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcesproductpriceresourcephp"></a>
### app\Http\Resources\ProductPriceResource.php
- SHA: `92f07786c52b`  
- Ukuran: 864 B  
- Namespace: `App\Http\Resources`

**Class `ProductPriceResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductPriceResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'outlet_name' => $this->outlet?->name,
            'outlet_code' => $this->outlet?->code,
            'price' => $this->price,
            'dine_in_price' => $this->dine_in_price,
            'takeaway_price' => $this->takeaway_price,
            'delivery_price' => $this->delivery_price,
            'starts_at' => $this->starts_at,
            'ends_at' => $this->ends_at,
            'is_active' => $this->is_active,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcesproductresourcephp"></a>
### app\Http\Resources\ProductResource.php
- SHA: `ea7bb2ff599b`  
- Ukuran: 2 KB  
- Namespace: `App\Http\Resources`

**Class `ProductResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_category_id' => $this->product_category_id,
            'category' => $this->whenLoaded('category', function () {
                return [
                    'id' => $this->category?->id,
                    'name' => $this->category?->name,
                    'slug' => $this->category?->slug,
                ];
            }),
            'sku' => $this->sku,
            'code' => $this->code,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'image_url' => $this->image_url,
            'base_price' => $this->base_price,
            'product_type' => $this->product_type,
            'is_active' => $this->is_active,
            'is_featured' => $this->is_featured,
            'track_recipe' => $this->track_recipe,
            'track_stock_direct' => $this->track_stock_direct,
            'prices' => ProductPriceResource::collection($this->whenLoaded('prices')),
            'outlet_statuses' => ProductOutletStatusResource::collection($this->whenLoaded('outletStatuses')),
            'variant_groups' => ProductVariantGroupResource::collection($this->whenLoaded('variantGroups')),
            'modifier_groups' => ProductModifierGroupResource::collection($this->whenLoaded('modifierGroups')),
            'bundle_items' => ProductBundleItemResource::collection($this->whenLoaded('bundleItems')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcesproductvariantgroupresourcephp"></a>
### app\Http\Resources\ProductVariantGroupResource.php
- SHA: `02cc4b51a358`  
- Ukuran: 723 B  
- Namespace: `App\Http\Resources`

**Class `ProductVariantGroupResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductVariantGroupResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'name' => $this->name,
            'selection_type' => $this->selection_type,
            'is_required' => $this->is_required,
            'sort_order' => $this->sort_order,
            'options' => ProductVariantOptionResource::collection($this->whenLoaded('options')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcesproductvariantoptionresourcephp"></a>
### app\Http\Resources\ProductVariantOptionResource.php
- SHA: `c6815e192925`  
- Ukuran: 655 B  
- Namespace: `App\Http\Resources`

**Class `ProductVariantOptionResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductVariantOptionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_variant_group_id' => $this->product_variant_group_id,
            'name' => $this->name,
            'price_adjustment' => $this->price_adjustment,
            'sort_order' => $this->sort_order,
            'is_active' => $this->is_active,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcespromotionresourcephp"></a>
### app\Http\Resources\PromotionResource.php
- SHA: `dd884d6e207d`  
- Ukuran: 782 B  
- Namespace: `App\Http\Resources`

**Class `PromotionResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PromotionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'promotion_type' => $this->promotion_type,
            'starts_at' => $this->starts_at,
            'ends_at' => $this->ends_at,
            'priority' => $this->priority,
            'is_active' => $this->is_active,
            'rules' => PromotionRuleResource::collection($this->whenLoaded('rules')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcespromotionruleresourcephp"></a>
### app\Http\Resources\PromotionRuleResource.php
- SHA: `73592a4a0d35`  
- Ukuran: 563 B  
- Namespace: `App\Http\Resources`

**Class `PromotionRuleResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PromotionRuleResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'promotion_id' => $this->promotion_id,
            'rule_type' => $this->rule_type,
            'operator' => $this->operator,
            'value' => $this->value,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcespurchaseorderitemresourcephp"></a>
### app\Http\Resources\PurchaseOrderItemResource.php
- SHA: `2f6a54bf45a7`  
- Ukuran: 1006 B  
- Namespace: `App\Http\Resources`

**Class `PurchaseOrderItemResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PurchaseOrderItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'purchase_order_id' => $this->purchase_order_id,
            'raw_material_id' => $this->raw_material_id,
            'raw_material_name' => $this->rawMaterial?->name,
            'raw_material_code' => $this->rawMaterial?->code,
            'unit_id' => $this->unit_id,
            'unit_name' => $this->unit?->name,
            'unit_code' => $this->unit?->code,
            'qty_ordered' => $this->qty_ordered,
            'unit_price' => $this->unit_price,
            'discount_amount' => $this->discount_amount,
            'line_total' => $this->line_total,
            'notes' => $this->notes,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcespurchaseorderresourcephp"></a>
### app\Http\Resources\PurchaseOrderResource.php
- SHA: `fc35e9dd3de6`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Resources`

**Class `PurchaseOrderResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PurchaseOrderResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'outlet_name' => $this->outlet?->name,
            'supplier_id' => $this->supplier_id,
            'supplier_name' => $this->supplier?->name,
            'po_number' => $this->po_number,
            'status' => $this->status,
            'order_date' => $this->order_date,
            'expected_date' => $this->expected_date,
            'subtotal' => $this->subtotal,
            'discount_amount' => $this->discount_amount,
            'tax_amount' => $this->tax_amount,
            'total_amount' => $this->total_amount,
            'notes' => $this->notes,
            'approved_by' => $this->approved_by,
            'approved_by_name' => $this->approver?->name,
            'approved_at' => $this->approved_at,
            'created_by' => $this->created_by,
            'created_by_name' => $this->creator?->name,
            'items' => PurchaseOrderItemResource::collection($this->whenLoaded('items')),
            'goods_receipts_count' => $this->whenCounted('goodsReceipts'),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesrawmaterialcategoryresourcephp"></a>
### app\Http\Resources\RawMaterialCategoryResource.php
- SHA: `fc3fa2f0720e`  
- Ukuran: 502 B  
- Namespace: `App\Http\Resources`

**Class `RawMaterialCategoryResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RawMaterialCategoryResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'raw_materials_count' => $this->whenCounted('rawMaterials'),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesrawmaterialresourcephp"></a>
### app\Http\Resources\RawMaterialResource.php
- SHA: `c3d512d2b1da`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Resources`

**Class `RawMaterialResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RawMaterialResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'raw_material_category_id' => $this->raw_material_category_id,
            'category' => $this->whenLoaded('category', function () {
                return [
                    'id' => $this->category?->id,
                    'name' => $this->category?->name,
                ];
            }),
            'unit_id' => $this->unit_id,
            'unit' => $this->whenLoaded('unit', function () {
                return [
                    'id' => $this->unit?->id,
                    'name' => $this->unit?->name,
                    'code' => $this->unit?->code,
                ];
            }),
            'code' => $this->code,
            'sku' => $this->sku,
            'name' => $this->name,
            'description' => $this->description,
            'minimum_stock' => $this->minimum_stock,
            'last_purchase_price' => $this->last_purchase_price,
            'average_cost' => $this->average_cost,
            'is_active' => $this->is_active,
            'outlet_stocks' => OutletMaterialStockResource::collection($this->whenLoaded('outletStocks')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesroleresourcephp"></a>
### app\Http\Resources\RoleResource.php
- SHA: `e3e1272fe416`  
- Ukuran: 535 B  
- Namespace: `App\Http\Resources`

**Class `RoleResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RoleResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'guard_name' => $this->guard_name,
            'permissions' => $this->permissions->pluck('name')->values(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesstockadjustmentitemresourcephp"></a>
### app\Http\Resources\StockAdjustmentItemResource.php
- SHA: `ac7491ac27c5`  
- Ukuran: 646 B  
- Namespace: `App\Http\Resources`

**Class `StockAdjustmentItemResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockAdjustmentItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'raw_material_id' => $this->raw_material_id,
            'qty_difference' => $this->qty_difference,
            'unit_id' => $this->unit_id,
            'notes' => $this->notes,
            'raw_material' => new RawMaterialResource($this->whenLoaded('rawMaterial')),
            'unit' => new UnitResource($this->whenLoaded('unit')),
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesstockadjustmentresourcephp"></a>
### app\Http\Resources\StockAdjustmentResource.php
- SHA: `1bb63314e92c`  
- Ukuran: 993 B  
- Namespace: `App\Http\Resources`

**Class `StockAdjustmentResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockAdjustmentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'adjustment_number' => $this->adjustment_number,
            'adjustment_date' => $this->adjustment_date,
            'reason' => $this->reason,
            'notes' => $this->notes,
            'created_by' => $this->created_by,
            'approved_by' => $this->approved_by,
            'approved_at' => $this->approved_at,
            'outlet' => new OutletResource($this->whenLoaded('outlet')),
            'creator' => new UserResource($this->whenLoaded('creator')),
            'approver' => new UserResource($this->whenLoaded('approver')),
            'items' => StockAdjustmentItemResource::collection($this->whenLoaded('items')),
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesstockmovementitemresourcephp"></a>
### app\Http\Resources\StockMovementItemResource.php
- SHA: `61e3c15870d2`  
- Ukuran: 606 B  
- Namespace: `App\Http\Resources`

**Class `StockMovementItemResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockMovementItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'raw_material_id' => $this->raw_material_id,
            'qty_in' => $this->qty_in,
            'qty_out' => $this->qty_out,
            'unit_cost' => $this->unit_cost,
            'notes' => $this->notes,
            'raw_material' => new RawMaterialResource($this->whenLoaded('rawMaterial')),
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesstockmovementresourcephp"></a>
### app\Http\Resources\StockMovementResource.php
- SHA: `4ed63302142a`  
- Ukuran: 871 B  
- Namespace: `App\Http\Resources`

**Class `StockMovementResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockMovementResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'movement_type' => $this->movement_type,
            'reference_type' => $this->reference_type,
            'reference_id' => $this->reference_id,
            'movement_date' => $this->movement_date,
            'notes' => $this->notes,
            'created_by' => $this->created_by,
            'outlet' => new OutletResource($this->whenLoaded('outlet')),
            'creator' => new UserResource($this->whenLoaded('creator')),
            'items' => StockMovementItemResource::collection($this->whenLoaded('items')),
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesstockopnameitemresourcephp"></a>
### app\Http\Resources\StockOpnameItemResource.php
- SHA: `9be40eaa7dec`  
- Ukuran: 736 B  
- Namespace: `App\Http\Resources`

**Class `StockOpnameItemResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockOpnameItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'raw_material_id' => $this->raw_material_id,
            'system_qty' => $this->system_qty,
            'actual_qty' => $this->actual_qty,
            'difference_qty' => $this->difference_qty,
            'unit_id' => $this->unit_id,
            'notes' => $this->notes,
            'raw_material' => new RawMaterialResource($this->whenLoaded('rawMaterial')),
            'unit' => new UnitResource($this->whenLoaded('unit')),
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesstockopnameresourcephp"></a>
### app\Http\Resources\StockOpnameResource.php
- SHA: `75df6a32e740`  
- Ukuran: 957 B  
- Namespace: `App\Http\Resources`

**Class `StockOpnameResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockOpnameResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'opname_number' => $this->opname_number,
            'opname_date' => $this->opname_date,
            'status' => $this->status,
            'notes' => $this->notes,
            'created_by' => $this->created_by,
            'posted_by' => $this->posted_by,
            'posted_at' => $this->posted_at,
            'outlet' => new OutletResource($this->whenLoaded('outlet')),
            'creator' => new UserResource($this->whenLoaded('creator')),
            'poster' => new UserResource($this->whenLoaded('poster')),
            'items' => StockOpnameItemResource::collection($this->whenLoaded('items')),
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesstocktransferitemresourcephp"></a>
### app\Http\Resources\StockTransferItemResource.php
- SHA: `bcd61fbf07a4`  
- Ukuran: 683 B  
- Namespace: `App\Http\Resources`

**Class `StockTransferItemResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockTransferItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'raw_material_id' => $this->raw_material_id,
            'qty_sent' => $this->qty_sent,
            'qty_received' => $this->qty_received,
            'unit_id' => $this->unit_id,
            'notes' => $this->notes,
            'raw_material' => new RawMaterialResource($this->whenLoaded('rawMaterial')),
            'unit' => new UnitResource($this->whenLoaded('unit')),
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesstocktransferresourcephp"></a>
### app\Http\Resources\StockTransferResource.php
- SHA: `11f39a5ef28a`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Resources`

**Class `StockTransferResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockTransferResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'source_outlet_id' => $this->source_outlet_id,
            'target_outlet_id' => $this->target_outlet_id,
            'transfer_number' => $this->transfer_number,
            'status' => $this->status,
            'transfer_date' => $this->transfer_date,
            'sent_at' => $this->sent_at,
            'received_at' => $this->received_at,
            'notes' => $this->notes,
            'created_by' => $this->created_by,
            'received_by' => $this->received_by,
            'source_outlet' => new OutletResource($this->whenLoaded('sourceOutlet')),
            'target_outlet' => new OutletResource($this->whenLoaded('targetOutlet')),
            'creator' => new UserResource($this->whenLoaded('creator')),
            'receiver' => new UserResource($this->whenLoaded('receiver')),
            'items' => StockTransferItemResource::collection($this->whenLoaded('items')),
        ];
    }
}

```
</details>

<a id="file-apphttpresourcessupplierresourcephp"></a>
### app\Http\Resources\SupplierResource.php
- SHA: `514d021023cf`  
- Ukuran: 827 B  
- Namespace: `App\Http\Resources`

**Class `SupplierResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SupplierResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
            'city' => $this->city,
            'contact_person' => $this->contact_person,
            'is_active' => $this->is_active,
            'purchase_orders_count' => $this->whenCounted('purchaseOrders'),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcessystemsettingresourcephp"></a>
### app\Http\Resources\SystemSettingResource.php
- SHA: `ed7c14655129`  
- Ukuran: 493 B  
- Namespace: `App\Http\Resources`

**Class `SystemSettingResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SystemSettingResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'key' => $this->key,
            'value' => $this->value,
            'type' => $this->type,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesunitconversionresourcephp"></a>
### app\Http\Resources\UnitConversionResource.php
- SHA: `4a5183b01741`  
- Ukuran: 750 B  
- Namespace: `App\Http\Resources`

**Class `UnitConversionResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UnitConversionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'from_unit_id' => $this->from_unit_id,
            'from_unit_name' => $this->fromUnit?->name,
            'from_unit_code' => $this->fromUnit?->code,
            'to_unit_id' => $this->to_unit_id,
            'to_unit_name' => $this->toUnit?->name,
            'to_unit_code' => $this->toUnit?->code,
            'multiplier' => $this->multiplier,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesunitresourcephp"></a>
### app\Http\Resources\UnitResource.php
- SHA: `f224b72a69e0`  
- Ukuran: 449 B  
- Namespace: `App\Http\Resources`

**Class `UnitResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UnitResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'code' => $this->code,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

```
</details>

<a id="file-apphttpresourcesuserresourcephp"></a>
### app\Http\Resources\UserResource.php
- SHA: `7959fd418c6a`  
- Ukuran: 1 KB  
- Namespace: `App\Http\Resources`

**Class `UserResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'username' => $this->username,
            'is_active' => $this->is_active,
            'user_type' => $this->user_type,
            'last_login_at' => $this->last_login_at,
            'roles' => $this->getRoleNames()->values(),
            'permissions' => $this->getAllPermissions()->pluck('name')->values(),
            'outlet_accesses' => $this->whenLoaded('outletAccesses', function () {
                return $this->outletAccesses->map(function ($access) {
                    return [
                        'id' => $access->id,
                        'outlet_id' => $access->outlet_id,
                        'outlet_name' => $access->outlet?->name,
                        'outlet_code' => $access->outlet?->code,
                        'is_default' => $access->is_default,
                    ];
                })->values();
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>

<a id="file-apphttpresourcesvoucherresourcephp"></a>
### app\Http\Resources\VoucherResource.php
- SHA: `4dc15410b28c`  
- Ukuran: 978 B  
- Namespace: `App\Http\Resources`

**Class `VoucherResource` extends `JsonResource`**

Metode Publik:
- **toArray**(Request $request) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VoucherResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'name' => $this->name,
            'description' => $this->description,
            'discount_type' => $this->discount_type,
            'discount_value' => $this->discount_value,
            'max_discount' => $this->max_discount,
            'min_order_total' => $this->min_order_total,
            'quota' => $this->quota,
            'used_count' => $this->used_count,
            'starts_at' => $this->starts_at,
            'ends_at' => $this->ends_at,
            'is_active' => $this->is_active,
            'applies_to' => $this->applies_to,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
```
</details>


## Models (app/Models)

<a id="file-appmodelscashiershiftphp"></a>
### app\Models\CashierShift.php
- SHA: `8520b849de9f`  
- Ukuran: 1 KB  
- Namespace: `App\Models`

**Class `CashierShift` extends `Model`**

Metode Publik:
- **outlet**() : *BelongsTo*
- **user**() : *BelongsTo*
- **orders**() : *HasMany*
- **cashMovements**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CashierShift extends Model
{
    protected $fillable = [
        'outlet_id',
        'user_id',
        'shift_number',
        'opened_at',
        'closed_at',
        'opening_cash',
        'expected_cash',
        'closing_cash',
        'cash_difference',
        'status',
        'notes',
    ];

    protected $casts = [
        'opened_at' => 'datetime',
        'closed_at' => 'datetime',
        'opening_cash' => 'decimal:2',
        'expected_cash' => 'decimal:2',
        'closing_cash' => 'decimal:2',
        'cash_difference' => 'decimal:2',
    ];

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function cashMovements(): HasMany
    {
        return $this->hasMany(CashMovement::class);
    }
}

```
</details>

<a id="file-appmodelscashmovementphp"></a>
### app\Models\CashMovement.php
- SHA: `caa4778c0f6d`  
- Ukuran: 618 B  
- Namespace: `App\Models`

**Class `CashMovement` extends `Model`**

Metode Publik:
- **cashierShift**() : *BelongsTo*
- **creator**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CashMovement extends Model
{
    protected $fillable = [
        'cashier_shift_id',
        'movement_type',
        'amount',
        'reason',
        'notes',
        'created_by',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
    ];

    public function cashierShift(): BelongsTo
    {
        return $this->belongsTo(CashierShift::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}

```
</details>

<a id="file-appmodelscourierphp"></a>
### app\Models\Courier.php
- SHA: `ed07175741a1`  
- Ukuran: 490 B  
- Namespace: `App\Models`

**Class `Courier` extends `Model`**

Metode Publik:
- **deliveries**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Courier extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'vehicle_number',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function deliveries(): HasMany
    {
        return $this->hasMany(Delivery::class);
    }
}

```
</details>

<a id="file-appmodelscustomerphp"></a>
### app\Models\Customer.php
- SHA: `652c7ad531da`  
- Ukuran: 849 B  
- Namespace: `App\Models`

**Class `Customer` extends `Model`**

Metode Publik:
- **addresses**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'name',
        'phone',
        'email',
        'gender',
        'birth_date',
        'points',
        'total_spent',
        'is_member',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'birth_date' => 'date',
            'points' => 'integer',
            'total_spent' => 'decimal:2',
            'is_member' => 'boolean',
        ];
    }

    public function addresses(): HasMany
    {
        return $this->hasMany(CustomerAddress::class);
    }
}
```
</details>

<a id="file-appmodelscustomeraddressphp"></a>
### app\Models\CustomerAddress.php
- SHA: `1cd97b8e15ff`  
- Ukuran: 969 B  
- Namespace: `App\Models`

**Class `CustomerAddress` extends `Model`**

Metode Publik:
- **customer**() : *BelongsTo*
- **deliveries**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CustomerAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'label',
        'recipient_name',
        'recipient_phone',
        'address',
        'city',
        'province',
        'postal_code',
        'latitude',
        'longitude',
        'is_default',
    ];

    protected function casts(): array
    {
        return [
            'latitude'   => 'decimal:7',
            'longitude'  => 'decimal:7',
            'is_default' => 'boolean',
        ];
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function deliveries(): HasMany
    {
        return $this->hasMany(Delivery::class);
    }
}

```
</details>

<a id="file-appmodelsdeliveryphp"></a>
### app\Models\Delivery.php
- SHA: `884082ef5a24`  
- Ukuran: 843 B  
- Namespace: `App\Models`

**Class `Delivery` extends `Model`**

Metode Publik:
- **order**() : *BelongsTo*
- **customerAddress**() : *BelongsTo*
- **courier**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Delivery extends Model
{
    protected $fillable = [
        'order_id',
        'customer_address_id',
        'courier_id',
        'delivery_status',
        'delivery_fee',
        'delivered_at',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'delivery_fee' => 'decimal:2',
            'delivered_at' => 'datetime',
        ];
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function customerAddress(): BelongsTo
    {
        return $this->belongsTo(CustomerAddress::class);
    }

    public function courier(): BelongsTo
    {
        return $this->belongsTo(Courier::class);
    }
}

```
</details>

<a id="file-appmodelsexpensephp"></a>
### app\Models\Expense.php
- SHA: `7823c5a21d64`  
- Ukuran: 1 KB  
- Namespace: `App\Models`

**Class `Expense` extends `Model`**

Metode Publik:
- **outlet**() : *BelongsTo*
- **category**() : *BelongsTo*
- **creator**() : *BelongsTo*
- **approver**() : *BelongsTo*
- **attachments**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Expense extends Model
{
    protected $fillable = [
        'outlet_id',
        'expense_category_id',
        'expense_date',
        'amount',
        'description',
        'status',
        'created_by',
        'approved_by',
        'approved_at',
    ];

    protected $casts = [
        'expense_date' => 'date',
        'amount' => 'decimal:2',
        'approved_at' => 'datetime',
    ];

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ExpenseCategory::class, 'expense_category_id');
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function approver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function attachments(): HasMany
    {
        return $this->hasMany(ExpenseAttachment::class);
    }
}

```
</details>

<a id="file-appmodelsexpenseattachmentphp"></a>
### app\Models\ExpenseAttachment.php
- SHA: `8014d351e650`  
- Ukuran: 390 B  
- Namespace: `App\Models`

**Class `ExpenseAttachment` extends `Model`**

Metode Publik:
- **expense**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExpenseAttachment extends Model
{
    protected $fillable = [
        'expense_id',
        'file_path',
        'file_name',
        'mime_type',
    ];

    public function expense(): BelongsTo
    {
        return $this->belongsTo(Expense::class);
    }
}

```
</details>

<a id="file-appmodelsexpensecategoryphp"></a>
### app\Models\ExpenseCategory.php
- SHA: `636da4401eda`  
- Ukuran: 402 B  
- Namespace: `App\Models`

**Class `ExpenseCategory` extends `Model`**

Metode Publik:
- **expenses**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExpenseCategory extends Model
{
    protected $fillable = [
        'name',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function expenses(): HasMany
    {
        return $this->hasMany(Expense::class);
    }
}

```
</details>

<a id="file-appmodelsgoodsreceiptphp"></a>
### app\Models\GoodsReceipt.php
- SHA: `371b7de801b9`  
- Ukuran: 918 B  
- Namespace: `App\Models`

**Class `GoodsReceipt` extends `Model`**

Metode Publik:
- **purchaseOrder**() : *BelongsTo*
- **outlet**() : *BelongsTo*
- **receiver**() : *BelongsTo*
- **items**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GoodsReceipt extends Model
{
    protected $fillable = [
        'purchase_order_id',
        'outlet_id',
        'receipt_number',
        'received_date',
        'status',
        'notes',
        'received_by',
    ];

    protected $casts = [
        'received_date' => 'datetime',
    ];

    public function purchaseOrder(): BelongsTo
    {
        return $this->belongsTo(PurchaseOrder::class);
    }

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }

    public function receiver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'received_by');
    }

    public function items(): HasMany
    {
        return $this->hasMany(GoodsReceiptItem::class);
    }
}

```
</details>

<a id="file-appmodelsgoodsreceiptitemphp"></a>
### app\Models\GoodsReceiptItem.php
- SHA: `52c1a8d6a349`  
- Ukuran: 879 B  
- Namespace: `App\Models`

**Class `GoodsReceiptItem` extends `Model`**

Metode Publik:
- **goodsReceipt**() : *BelongsTo*
- **rawMaterial**() : *BelongsTo*
- **unit**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GoodsReceiptItem extends Model
{
    protected $fillable = [
        'goods_receipt_id',
        'raw_material_id',
        'unit_id',
        'qty_received',
        'unit_cost',
        'line_total',
        'expired_at',
        'notes',
    ];

    protected $casts = [
        'qty_received' => 'decimal:3',
        'unit_cost' => 'decimal:2',
        'line_total' => 'decimal:2',
        'expired_at' => 'date',
    ];

    public function goodsReceipt(): BelongsTo
    {
        return $this->belongsTo(GoodsReceipt::class);
    }

    public function rawMaterial(): BelongsTo
    {
        return $this->belongsTo(RawMaterial::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }
}

```
</details>

<a id="file-appmodelskitchenticketphp"></a>
### app\Models\KitchenTicket.php
- SHA: `0fc21a718422`  
- Ukuran: 674 B  
- Namespace: `App\Models`

**Class `KitchenTicket` extends `Model`**

Metode Publik:
- **order**()
- **items**()
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KitchenTicket extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'ticket_number',
        'status',
        'printed_at',
        'prepared_at',
        'ready_at',
    ];

    protected $casts = [
        'printed_at' => 'datetime',
        'prepared_at' => 'datetime',
        'ready_at' => 'datetime',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function items()
    {
        return $this->hasMany(KitchenTicketItem::class);
    }
}

```
</details>

<a id="file-appmodelskitchenticketitemphp"></a>
### app\Models\KitchenTicketItem.php
- SHA: `504c3c4b641c`  
- Ukuran: 603 B  
- Namespace: `App\Models`

**Class `KitchenTicketItem` extends `Model`**

Metode Publik:
- **kitchenTicket**()
- **orderItem**()
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KitchenTicketItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'kitchen_ticket_id',
        'order_item_id',
        'item_name_snapshot',
        'qty',
        'notes',
    ];

    protected $casts = [
        'qty' => 'decimal:3',
    ];

    public function kitchenTicket()
    {
        return $this->belongsTo(KitchenTicket::class);
    }

    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class);
    }
}

```
</details>

<a id="file-appmodelsorderphp"></a>
### app\Models\Order.php
- SHA: `a5be9dcfb5a8`  
- Ukuran: 2 KB  
- Namespace: `App\Models`

**Class `Order` extends `Model`**

Metode Publik:
- **outlet**()
- **cashierShift**()
- **customer**()
- **creator**()
- **canceller**()
- **items**()
- **payments**()
- **statusHistories**()
- **kitchenTickets**()
- **delivery**() : *HasOne*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'outlet_id',
        'cashier_shift_id',
        'customer_id',
        'order_number',
        'queue_number',
        'order_channel',
        'order_status',
        'payment_status',
        'subtotal',
        'discount_amount',
        'tax_amount',
        'service_charge_amount',
        'grand_total',
        'paid_total',
        'change_amount',
        'notes',
        'ordered_at',
        'completed_at',
        'cancelled_at',
        'cancelled_by',
        'created_by',
    ];

    protected $casts = [
        'subtotal'              => 'decimal:2',
        'discount_amount'       => 'decimal:2',
        'tax_amount'            => 'decimal:2',
        'service_charge_amount' => 'decimal:2',
        'grand_total'           => 'decimal:2',
        'paid_total'            => 'decimal:2',
        'change_amount'         => 'decimal:2',
        'ordered_at'            => 'datetime',
        'completed_at'          => 'datetime',
        'cancelled_at'          => 'datetime',
    ];

    public function outlet()
    {
        return $this->belongsTo(Outlet::class);
    }

    public function cashierShift()
    {
        return $this->belongsTo(CashierShift::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function canceller()
    {
        return $this->belongsTo(User::class, 'cancelled_by');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function statusHistories()
    {
        return $this->hasMany(OrderStatusHistory::class);
    }

    public function kitchenTickets()
    {
        return $this->hasMany(KitchenTicket::class);
    }

    public function delivery(): HasOne
    {
        return $this->hasOne(Delivery::class);
    }
}

```
</details>

<a id="file-appmodelsorderitemphp"></a>
### app\Models\OrderItem.php
- SHA: `35b3b37de401`  
- Ukuran: 1 KB  
- Namespace: `App\Models`

**Class `OrderItem` extends `Model`**

Metode Publik:
- **order**()
- **product**()
- **variants**()
- **modifiers**()
- **kitchenTicketItems**()
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'product_name_snapshot',
        'sku_snapshot',
        'qty',
        'unit_price',
        'discount_amount',
        'line_total',
        'notes',
    ];

    protected $casts = [
        'qty' => 'decimal:3',
        'unit_price' => 'decimal:2',
        'discount_amount' => 'decimal:2',
        'line_total' => 'decimal:2',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function variants()
    {
        return $this->hasMany(OrderItemVariant::class);
    }

    public function modifiers()
    {
        return $this->hasMany(OrderItemModifier::class);
    }

    public function kitchenTicketItems()
    {
        return $this->hasMany(KitchenTicketItem::class);
    }
}

```
</details>

<a id="file-appmodelsorderitemmodifierphp"></a>
### app\Models\OrderItemModifier.php
- SHA: `3742b7b78685`  
- Ukuran: 542 B  
- Namespace: `App\Models`

**Class `OrderItemModifier` extends `Model`**

Metode Publik:
- **orderItem**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItemModifier extends Model
{
    protected $fillable = [
        'order_item_id',
        'modifier_group_name_snapshot',
        'modifier_option_name_snapshot',
        'qty',
        'price',
    ];

    protected $casts = [
        'qty' => 'decimal:3',
        'price' => 'decimal:2',
    ];

    public function orderItem(): BelongsTo
    {
        return $this->belongsTo(OrderItem::class);
    }
}

```
</details>

<a id="file-appmodelsorderitemvariantphp"></a>
### app\Models\OrderItemVariant.php
- SHA: `357a91c638b7`  
- Ukuran: 516 B  
- Namespace: `App\Models`

**Class `OrderItemVariant` extends `Model`**

Metode Publik:
- **orderItem**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItemVariant extends Model
{
    protected $fillable = [
        'order_item_id',
        'variant_group_name_snapshot',
        'variant_option_name_snapshot',
        'price_adjustment',
    ];

    protected $casts = [
        'price_adjustment' => 'decimal:2',
    ];

    public function orderItem(): BelongsTo
    {
        return $this->belongsTo(OrderItem::class);
    }
}

```
</details>

<a id="file-appmodelsorderstatushistoryphp"></a>
### app\Models\OrderStatusHistory.php
- SHA: `4597e73d644d`  
- Ukuran: 584 B  
- Namespace: `App\Models`

**Class `OrderStatusHistory` extends `Model`**

Metode Publik:
- **order**() : *BelongsTo*
- **changer**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderStatusHistory extends Model
{
    protected $fillable = [
        'order_id',
        'status',
        'changed_by',
        'notes',
        'changed_at',
    ];

    protected $casts = [
        'changed_at' => 'datetime',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function changer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'changed_by');
    }
}

```
</details>

<a id="file-appmodelsoutletphp"></a>
### app\Models\Outlet.php
- SHA: `25b8b4770fe6`  
- Ukuran: 1 KB  
- Namespace: `App\Models`

**Class `Outlet` extends `Model`**

Metode Publik:
- **setting**() : *HasOne*
- **userAccesses**() : *HasMany*
- **users**() : *BelongsToMany*
- **materialStocks**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Outlet extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'name',
        'phone',
        'email',
        'address',
        'city',
        'province',
        'postal_code',
        'latitude',
        'longitude',
        'opening_time',
        'closing_time',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'latitude'  => 'decimal:7',
            'longitude' => 'decimal:7',
            'is_active' => 'boolean',
        ];
    }

    public function setting(): HasOne
    {
        return $this->hasOne(OutletSetting::class);
    }

    public function userAccesses(): HasMany
    {
        return $this->hasMany(UserOutletAccess::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_outlet_accesses')
            ->withPivot('is_default')
            ->withTimestamps();
    }

    public function materialStocks(): HasMany
    {
        return $this->hasMany(OutletMaterialStock::class);
    }
}

```
</details>

<a id="file-appmodelsoutletmaterialstockphp"></a>
### app\Models\OutletMaterialStock.php
- SHA: `bcb36a8588ef`  
- Ukuran: 825 B  
- Namespace: `App\Models`

**Class `OutletMaterialStock` extends `Model`**

Metode Publik:
- **outlet**() : *BelongsTo*
- **rawMaterial**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OutletMaterialStock extends Model
{
    use HasFactory;

    protected $fillable = [
        'outlet_id',
        'raw_material_id',
        'qty_on_hand',
        'qty_reserved',
        'last_movement_at',
    ];

    protected function casts(): array
    {
        return [
            'qty_on_hand' => 'decimal:3',
            'qty_reserved' => 'decimal:3',
            'last_movement_at' => 'datetime',
        ];
    }

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }

    public function rawMaterial(): BelongsTo
    {
        return $this->belongsTo(RawMaterial::class);
    }
}

```
</details>

<a id="file-appmodelsoutletsettingphp"></a>
### app\Models\OutletSetting.php
- SHA: `699d875583f7`  
- Ukuran: 930 B  
- Namespace: `App\Models`

**Class `OutletSetting` extends `Model`**

Metode Publik:
- **outlet**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OutletSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'outlet_id',
        'tax_percent',
        'service_charge_percent',
        'currency_code',
        'receipt_footer',
        'invoice_prefix',
        'order_prefix',
        'timezone',
        'allow_negative_stock',
        'low_stock_notification_enabled',
    ];

    protected function casts(): array
    {
        return [
            'tax_percent' => 'decimal:2',
            'service_charge_percent' => 'decimal:2',
            'allow_negative_stock' => 'boolean',
            'low_stock_notification_enabled' => 'boolean',
        ];
    }

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }
}

```
</details>

<a id="file-appmodelspaymentphp"></a>
### app\Models\Payment.php
- SHA: `af1c320ac83c`  
- Ukuran: 793 B  
- Namespace: `App\Models`

**Class `Payment` extends `Model`**

Metode Publik:
- **order**() : *BelongsTo*
- **paymentMethod**() : *BelongsTo*
- **receiver**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $fillable = [
        'order_id',
        'payment_method_id',
        'amount',
        'reference_number',
        'paid_at',
        'status',
        'notes',
        'received_by',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'paid_at' => 'datetime',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function receiver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'received_by');
    }
}

```
</details>

<a id="file-appmodelspaymentmethodphp"></a>
### app\Models\PaymentMethod.php
- SHA: `f4f5c8ec0621`  
- Ukuran: 432 B  
- Namespace: `App\Models`

**Class `PaymentMethod` extends `Model`**

Metode Publik:
- **payments**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaymentMethod extends Model
{
    protected $fillable = [
        'code',
        'name',
        'type',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}

```
</details>

<a id="file-appmodelsproductphp"></a>
### app\Models\Product.php
- SHA: `4497c5f448bf`  
- Ukuran: 2 KB  
- Namespace: `App\Models`

**Class `Product` extends `Model`**

Metode Publik:
- **category**() : *BelongsTo*
- **prices**() : *HasMany*
- **outletStatuses**() : *HasMany*
- **variantGroups**() : *HasMany*
- **modifierGroups**() : *HasMany*
- **bundleItems**() : *HasMany*
- **boms**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_category_id',
        'sku',
        'code',
        'name',
        'slug',
        'description',
        'image_url',
        'base_price',
        'product_type',
        'is_active',
        'is_featured',
        'track_recipe',
        'track_stock_direct',
    ];

    protected function casts(): array
    {
        return [
            'base_price'         => 'decimal:2',
            'is_active'          => 'boolean',
            'is_featured'        => 'boolean',
            'track_recipe'       => 'boolean',
            'track_stock_direct' => 'boolean',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function prices(): HasMany
    {
        return $this->hasMany(ProductPrice::class);
    }

    public function outletStatuses(): HasMany
    {
        return $this->hasMany(ProductOutletStatus::class);
    }

    public function variantGroups(): HasMany
    {
        return $this->hasMany(ProductVariantGroup::class)->orderBy('sort_order');
    }

    public function modifierGroups(): HasMany
    {
        return $this->hasMany(ProductModifierGroup::class)->orderBy('sort_order');
    }

    public function bundleItems(): HasMany
    {
        return $this->hasMany(ProductBundleItem::class);
    }

    public function boms(): HasMany
    {
        return $this->hasMany(ProductBom::class)->orderByDesc('version');
    }
}

```
</details>

<a id="file-appmodelsproductbomphp"></a>
### app\Models\ProductBom.php
- SHA: `9ee11ae1da9d`  
- Ukuran: 762 B  
- Namespace: `App\Models`

**Class `ProductBom` extends `Model`**

Metode Publik:
- **product**() : *BelongsTo*
- **items**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductBom extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'version',
        'is_active',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'version' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(ProductBomItem::class);
    }
}

```
</details>

<a id="file-appmodelsproductbomitemphp"></a>
### app\Models\ProductBomItem.php
- SHA: `31ecb6b5e37c`  
- Ukuran: 872 B  
- Namespace: `App\Models`

**Class `ProductBomItem` extends `Model`**

Metode Publik:
- **bom**() : *BelongsTo*
- **rawMaterial**() : *BelongsTo*
- **unit**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductBomItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_bom_id',
        'raw_material_id',
        'unit_id',
        'qty',
        'waste_percent',
    ];

    protected function casts(): array
    {
        return [
            'qty' => 'decimal:3',
            'waste_percent' => 'decimal:2',
        ];
    }

    public function bom(): BelongsTo
    {
        return $this->belongsTo(ProductBom::class, 'product_bom_id');
    }

    public function rawMaterial(): BelongsTo
    {
        return $this->belongsTo(RawMaterial::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }
}

```
</details>

<a id="file-appmodelsproductbundleitemphp"></a>
### app\Models\ProductBundleItem.php
- SHA: `d56fe2680d6d`  
- Ukuran: 692 B  
- Namespace: `App\Models`

**Class `ProductBundleItem` extends `Model`**

Metode Publik:
- **product**() : *BelongsTo*
- **bundledProduct**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductBundleItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'bundled_product_id',
        'qty',
    ];

    protected function casts(): array
    {
        return [
            'qty' => 'decimal:3',
        ];
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function bundledProduct(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'bundled_product_id');
    }
}
```
</details>

<a id="file-appmodelsproductcategoryphp"></a>
### app\Models\ProductCategory.php
- SHA: `298e808e9cab`  
- Ukuran: 663 B  
- Namespace: `App\Models`

**Class `ProductCategory` extends `Model`**

Metode Publik:
- **products**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'sort_order' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
```
</details>

<a id="file-appmodelsproductmodifiergroupphp"></a>
### app\Models\ProductModifierGroup.php
- SHA: `5db13c155591`  
- Ukuran: 934 B  
- Namespace: `App\Models`

**Class `ProductModifierGroup` extends `Model`**

Metode Publik:
- **product**() : *BelongsTo*
- **options**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductModifierGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'min_select',
        'max_select',
        'is_required',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'min_select' => 'integer',
            'max_select' => 'integer',
            'is_required' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function options(): HasMany
    {
        return $this->hasMany(ProductModifierOption::class)->orderBy('sort_order');
    }
}
```
</details>

<a id="file-appmodelsproductmodifieroptionphp"></a>
### app\Models\ProductModifierOption.php
- SHA: `d675b3d2c93e`  
- Ukuran: 729 B  
- Namespace: `App\Models`

**Class `ProductModifierOption` extends `Model`**

Metode Publik:
- **group**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductModifierOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_modifier_group_id',
        'name',
        'price',
        'is_active',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(ProductModifierGroup::class, 'product_modifier_group_id');
    }
}
```
</details>

<a id="file-appmodelsproductoutletstatusphp"></a>
### app\Models\ProductOutletStatus.php
- SHA: `39899ec8636f`  
- Ukuran: 809 B  
- Namespace: `App\Models`

**Class `ProductOutletStatus` extends `Model`**

Metode Publik:
- **product**() : *BelongsTo*
- **outlet**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductOutletStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'outlet_id',
        'is_available',
        'is_hidden',
        'daily_limit',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'is_available' => 'boolean',
            'is_hidden' => 'boolean',
            'daily_limit' => 'integer',
        ];
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }
}
```
</details>

<a id="file-appmodelsproductpricephp"></a>
### app\Models\ProductPrice.php
- SHA: `17eec45a872d`  
- Ukuran: 1 KB  
- Namespace: `App\Models`

**Class `ProductPrice` extends `Model`**

Metode Publik:
- **product**() : *BelongsTo*
- **outlet**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'outlet_id',
        'price',
        'dine_in_price',
        'takeaway_price',
        'delivery_price',
        'starts_at',
        'ends_at',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'dine_in_price' => 'decimal:2',
            'takeaway_price' => 'decimal:2',
            'delivery_price' => 'decimal:2',
            'starts_at' => 'datetime',
            'ends_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }
}
```
</details>

<a id="file-appmodelsproductvariantgroupphp"></a>
### app\Models\ProductVariantGroup.php
- SHA: `bb0670758ac6`  
- Ukuran: 836 B  
- Namespace: `App\Models`

**Class `ProductVariantGroup` extends `Model`**

Metode Publik:
- **product**() : *BelongsTo*
- **options**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductVariantGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'selection_type',
        'is_required',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'is_required' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function options(): HasMany
    {
        return $this->hasMany(ProductVariantOption::class)->orderBy('sort_order');
    }
}
```
</details>

<a id="file-appmodelsproductvariantoptionphp"></a>
### app\Models\ProductVariantOption.php
- SHA: `12c603169490`  
- Ukuran: 747 B  
- Namespace: `App\Models`

**Class `ProductVariantOption` extends `Model`**

Metode Publik:
- **group**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductVariantOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_variant_group_id',
        'name',
        'price_adjustment',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'price_adjustment' => 'decimal:2',
            'sort_order' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(ProductVariantGroup::class, 'product_variant_group_id');
    }
}
```
</details>

<a id="file-appmodelspromotionphp"></a>
### app\Models\Promotion.php
- SHA: `cf3a5601d276`  
- Ukuran: 761 B  
- Namespace: `App\Models`

**Class `Promotion` extends `Model`**

Metode Publik:
- **rules**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'promotion_type',
        'starts_at',
        'ends_at',
        'priority',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'starts_at' => 'datetime',
            'ends_at' => 'datetime',
            'priority' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    public function rules(): HasMany
    {
        return $this->hasMany(PromotionRule::class)->orderBy('id');
    }
}
```
</details>

<a id="file-appmodelspromotionrulephp"></a>
### app\Models\PromotionRule.php
- SHA: `a2ee8a601e15`  
- Ukuran: 462 B  
- Namespace: `App\Models`

**Class `PromotionRule` extends `Model`**

Metode Publik:
- **promotion**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PromotionRule extends Model
{
    use HasFactory;

    protected $fillable = [
        'promotion_id',
        'rule_type',
        'operator',
        'value',
    ];

    public function promotion(): BelongsTo
    {
        return $this->belongsTo(Promotion::class);
    }
}
```
</details>

<a id="file-appmodelspurchaseorderphp"></a>
### app\Models\PurchaseOrder.php
- SHA: `02c9189263f2`  
- Ukuran: 1 KB  
- Namespace: `App\Models`

**Class `PurchaseOrder` extends `Model`**

Metode Publik:
- **outlet**() : *BelongsTo*
- **supplier**() : *BelongsTo*
- **approver**() : *BelongsTo*
- **creator**() : *BelongsTo*
- **items**() : *HasMany*
- **goodsReceipts**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PurchaseOrder extends Model
{
    protected $fillable = [
        'outlet_id',
        'supplier_id',
        'po_number',
        'status',
        'order_date',
        'expected_date',
        'subtotal',
        'discount_amount',
        'tax_amount',
        'total_amount',
        'notes',
        'approved_by',
        'approved_at',
        'created_by',
    ];

    protected $casts = [
        'order_date' => 'date',
        'expected_date' => 'date',
        'approved_at' => 'datetime',
        'subtotal' => 'decimal:2',
        'discount_amount' => 'decimal:2',
        'tax_amount' => 'decimal:2',
        'total_amount' => 'decimal:2',
    ];

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    public function approver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function items(): HasMany
    {
        return $this->hasMany(PurchaseOrderItem::class);
    }

    public function goodsReceipts(): HasMany
    {
        return $this->hasMany(GoodsReceipt::class);
    }
}

```
</details>

<a id="file-appmodelspurchaseorderitemphp"></a>
### app\Models\PurchaseOrderItem.php
- SHA: `85f3d21e7122`  
- Ukuran: 898 B  
- Namespace: `App\Models`

**Class `PurchaseOrderItem` extends `Model`**

Metode Publik:
- **purchaseOrder**() : *BelongsTo*
- **rawMaterial**() : *BelongsTo*
- **unit**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PurchaseOrderItem extends Model
{
    protected $fillable = [
        'purchase_order_id',
        'raw_material_id',
        'unit_id',
        'qty_ordered',
        'unit_price',
        'discount_amount',
        'line_total',
        'notes',
    ];

    protected $casts = [
        'qty_ordered' => 'decimal:3',
        'unit_price' => 'decimal:2',
        'discount_amount' => 'decimal:2',
        'line_total' => 'decimal:2',
    ];

    public function purchaseOrder(): BelongsTo
    {
        return $this->belongsTo(PurchaseOrder::class);
    }

    public function rawMaterial(): BelongsTo
    {
        return $this->belongsTo(RawMaterial::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }
}

```
</details>

<a id="file-appmodelsrawmaterialphp"></a>
### app\Models\RawMaterial.php
- SHA: `af93bc40de5d`  
- Ukuran: 1 KB  
- Namespace: `App\Models`

**Class `RawMaterial` extends `Model`**

Metode Publik:
- **category**() : *BelongsTo*
- **unit**() : *BelongsTo*
- **outletStocks**() : *HasMany*
- **bomItems**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class RawMaterial extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'raw_material_category_id',
        'unit_id',
        'code',
        'sku',
        'name',
        'description',
        'minimum_stock',
        'last_purchase_price',
        'average_cost',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'minimum_stock' => 'decimal:3',
            'last_purchase_price' => 'decimal:2',
            'average_cost' => 'decimal:2',
            'is_active' => 'boolean',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(RawMaterialCategory::class, 'raw_material_category_id');
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function outletStocks(): HasMany
    {
        return $this->hasMany(OutletMaterialStock::class);
    }

    public function bomItems(): HasMany
    {
        return $this->hasMany(ProductBomItem::class);
    }
}

```
</details>

<a id="file-appmodelsrawmaterialcategoryphp"></a>
### app\Models\RawMaterialCategory.php
- SHA: `cab31ff78e82`  
- Ukuran: 402 B  
- Namespace: `App\Models`

**Class `RawMaterialCategory` extends `Model`**

Metode Publik:
- **rawMaterials**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RawMaterialCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function rawMaterials(): HasMany
    {
        return $this->hasMany(RawMaterial::class);
    }
}

```
</details>

<a id="file-appmodelsstockadjustmentphp"></a>
### app\Models\StockAdjustment.php
- SHA: `a9968ec74da4`  
- Ukuran: 983 B  
- Namespace: `App\Models`

**Class `StockAdjustment` extends `Model`**

Metode Publik:
- **outlet**() : *BelongsTo*
- **creator**() : *BelongsTo*
- **approver**() : *BelongsTo*
- **items**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StockAdjustment extends Model
{
    protected $fillable = [
        'outlet_id',
        'adjustment_number',
        'adjustment_date',
        'reason',
        'notes',
        'created_by',
        'approved_by',
        'approved_at',
    ];

    protected $casts = [
        'adjustment_date' => 'datetime',
        'approved_at' => 'datetime',
    ];

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function approver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function items(): HasMany
    {
        return $this->hasMany(StockAdjustmentItem::class);
    }
}

```
</details>

<a id="file-appmodelsstockadjustmentitemphp"></a>
### app\Models\StockAdjustmentItem.php
- SHA: `895722a4bd8d`  
- Ukuran: 725 B  
- Namespace: `App\Models`

**Class `StockAdjustmentItem` extends `Model`**

Metode Publik:
- **stockAdjustment**() : *BelongsTo*
- **rawMaterial**() : *BelongsTo*
- **unit**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockAdjustmentItem extends Model
{
    protected $fillable = [
        'stock_adjustment_id',
        'raw_material_id',
        'qty_difference',
        'unit_id',
        'notes',
    ];

    protected $casts = [
        'qty_difference' => 'decimal:3',
    ];

    public function stockAdjustment(): BelongsTo
    {
        return $this->belongsTo(StockAdjustment::class);
    }

    public function rawMaterial(): BelongsTo
    {
        return $this->belongsTo(RawMaterial::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }
}

```
</details>

<a id="file-appmodelsstockmovementphp"></a>
### app\Models\StockMovement.php
- SHA: `5e17c6158821`  
- Ukuran: 804 B  
- Namespace: `App\Models`

**Class `StockMovement` extends `Model`**

Metode Publik:
- **outlet**() : *BelongsTo*
- **creator**() : *BelongsTo*
- **items**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StockMovement extends Model
{
    protected $fillable = [
        'outlet_id',
        'movement_type',
        'reference_type',
        'reference_id',
        'movement_date',
        'notes',
        'created_by',
    ];

    protected $casts = [
        'movement_date' => 'datetime',
    ];

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function items(): HasMany
    {
        return $this->hasMany(StockMovementItem::class);
    }
}

```
</details>

<a id="file-appmodelsstockmovementitemphp"></a>
### app\Models\StockMovementItem.php
- SHA: `781655b4c501`  
- Ukuran: 695 B  
- Namespace: `App\Models`

**Class `StockMovementItem` extends `Model`**

Metode Publik:
- **stockMovement**() : *BelongsTo*
- **rawMaterial**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockMovementItem extends Model
{
    protected $fillable = [
        'stock_movement_id',
        'raw_material_id',
        'qty_in',
        'qty_out',
        'unit_cost',
        'notes',
    ];

    protected $casts = [
        'qty_in' => 'decimal:3',
        'qty_out' => 'decimal:3',
        'unit_cost' => 'decimal:2',
    ];

    public function stockMovement(): BelongsTo
    {
        return $this->belongsTo(StockMovement::class);
    }

    public function rawMaterial(): BelongsTo
    {
        return $this->belongsTo(RawMaterial::class);
    }
}

```
</details>

<a id="file-appmodelsstockopnamephp"></a>
### app\Models\StockOpname.php
- SHA: `e1da35deb842`  
- Ukuran: 949 B  
- Namespace: `App\Models`

**Class `StockOpname` extends `Model`**

Metode Publik:
- **outlet**() : *BelongsTo*
- **creator**() : *BelongsTo*
- **poster**() : *BelongsTo*
- **items**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StockOpname extends Model
{
    protected $fillable = [
        'outlet_id',
        'opname_number',
        'opname_date',
        'status',
        'notes',
        'created_by',
        'posted_by',
        'posted_at',
    ];

    protected $casts = [
        'opname_date' => 'date',
        'posted_at' => 'datetime',
    ];

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function poster(): BelongsTo
    {
        return $this->belongsTo(User::class, 'posted_by');
    }

    public function items(): HasMany
    {
        return $this->hasMany(StockOpnameItem::class);
    }
}

```
</details>

<a id="file-appmodelsstockopnameitemphp"></a>
### app\Models\StockOpnameItem.php
- SHA: `19fa867b51f1`  
- Ukuran: 827 B  
- Namespace: `App\Models`

**Class `StockOpnameItem` extends `Model`**

Metode Publik:
- **stockOpname**() : *BelongsTo*
- **rawMaterial**() : *BelongsTo*
- **unit**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockOpnameItem extends Model
{
    protected $fillable = [
        'stock_opname_id',
        'raw_material_id',
        'system_qty',
        'actual_qty',
        'difference_qty',
        'unit_id',
        'notes',
    ];

    protected $casts = [
        'system_qty' => 'decimal:3',
        'actual_qty' => 'decimal:3',
        'difference_qty' => 'decimal:3',
    ];

    public function stockOpname(): BelongsTo
    {
        return $this->belongsTo(StockOpname::class);
    }

    public function rawMaterial(): BelongsTo
    {
        return $this->belongsTo(RawMaterial::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }
}

```
</details>

<a id="file-appmodelsstocktransferphp"></a>
### app\Models\StockTransfer.php
- SHA: `b5c77c38664f`  
- Ukuran: 1 KB  
- Namespace: `App\Models`

**Class `StockTransfer` extends `Model`**

Metode Publik:
- **sourceOutlet**() : *BelongsTo*
- **targetOutlet**() : *BelongsTo*
- **creator**() : *BelongsTo*
- **receiver**() : *BelongsTo*
- **items**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StockTransfer extends Model
{
    protected $fillable = [
        'source_outlet_id',
        'target_outlet_id',
        'transfer_number',
        'status',
        'transfer_date',
        'sent_at',
        'received_at',
        'notes',
        'created_by',
        'received_by',
    ];

    protected $casts = [
        'transfer_date' => 'datetime',
        'sent_at' => 'datetime',
        'received_at' => 'datetime',
    ];

    public function sourceOutlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class, 'source_outlet_id');
    }

    public function targetOutlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class, 'target_outlet_id');
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function receiver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'received_by');
    }

    public function items(): HasMany
    {
        return $this->hasMany(StockTransferItem::class);
    }
}

```
</details>

<a id="file-appmodelsstocktransferitemphp"></a>
### app\Models\StockTransferItem.php
- SHA: `b06f8fdd91f4`  
- Ukuran: 768 B  
- Namespace: `App\Models`

**Class `StockTransferItem` extends `Model`**

Metode Publik:
- **stockTransfer**() : *BelongsTo*
- **rawMaterial**() : *BelongsTo*
- **unit**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockTransferItem extends Model
{
    protected $fillable = [
        'stock_transfer_id',
        'raw_material_id',
        'qty_sent',
        'qty_received',
        'unit_id',
        'notes',
    ];

    protected $casts = [
        'qty_sent' => 'decimal:3',
        'qty_received' => 'decimal:3',
    ];

    public function stockTransfer(): BelongsTo
    {
        return $this->belongsTo(StockTransfer::class);
    }

    public function rawMaterial(): BelongsTo
    {
        return $this->belongsTo(RawMaterial::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }
}

```
</details>

<a id="file-appmodelssupplierphp"></a>
### app\Models\Supplier.php
- SHA: `a92baf72f8df`  
- Ukuran: 586 B  
- Namespace: `App\Models`

**Class `Supplier` extends `Model`**

Metode Publik:
- **purchaseOrders**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'code',
        'name',
        'phone',
        'email',
        'address',
        'city',
        'contact_person',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function purchaseOrders(): HasMany
    {
        return $this->hasMany(PurchaseOrder::class);
    }
}

```
</details>

<a id="file-appmodelssystemsettingphp"></a>
### app\Models\SystemSetting.php
- SHA: `c7a02089b290`  
- Ukuran: 268 B  
- Namespace: `App\Models`

**Class `SystemSetting` extends `Model`**
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'type',
    ];
}

```
</details>

<a id="file-appmodelsunitphp"></a>
### app\Models\Unit.php
- SHA: `ea8507b9ba00`  
- Ukuran: 766 B  
- Namespace: `App\Models`

**Class `Unit` extends `Model`**

Metode Publik:
- **rawMaterials**() : *HasMany*
- **fromConversions**() : *HasMany*
- **toConversions**() : *HasMany*
- **bomItems**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
    ];

    public function rawMaterials(): HasMany
    {
        return $this->hasMany(RawMaterial::class);
    }

    public function fromConversions(): HasMany
    {
        return $this->hasMany(UnitConversion::class, 'from_unit_id');
    }

    public function toConversions(): HasMany
    {
        return $this->hasMany(UnitConversion::class, 'to_unit_id');
    }

    public function bomItems(): HasMany
    {
        return $this->hasMany(ProductBomItem::class);
    }
}

```
</details>

<a id="file-appmodelsunitconversionphp"></a>
### app\Models\UnitConversion.php
- SHA: `cfcda968cc69`  
- Ukuran: 693 B  
- Namespace: `App\Models`

**Class `UnitConversion` extends `Model`**

Metode Publik:
- **fromUnit**() : *BelongsTo*
- **toUnit**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UnitConversion extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_unit_id',
        'to_unit_id',
        'multiplier',
    ];

    protected function casts(): array
    {
        return [
            'multiplier' => 'decimal:6',
        ];
    }

    public function fromUnit(): BelongsTo
    {
        return $this->belongsTo(Unit::class, 'from_unit_id');
    }

    public function toUnit(): BelongsTo
    {
        return $this->belongsTo(Unit::class, 'to_unit_id');
    }
}

```
</details>

<a id="file-appmodelsuserphp"></a>
### app\Models\User.php
- SHA: `bc4b0b9171d6`  
- Ukuran: 2 KB  
- Namespace: `App\Models`

**Class `User` extends `Authenticatable`**

Metode Publik:
- **outletAccesses**() : *HasMany*
- **outlets**() : *BelongsToMany*
- **cashierShifts**() : *HasMany*
- **receivedPayments**() : *HasMany*
- **cashMovements**() : *HasMany*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $guard_name = 'sanctum';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'username',
        'password',
        'is_active',
        'user_type',
        'last_login_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'last_login_at' => 'datetime',
            'is_active' => 'boolean',
            'password' => 'hashed',
        ];
    }

    public function outletAccesses(): HasMany
    {
        return $this->hasMany(UserOutletAccess::class);
    }

    public function outlets(): BelongsToMany
    {
        return $this->belongsToMany(Outlet::class, 'user_outlet_accesses')
            ->withPivot('is_default')
            ->withTimestamps();
    }

    public function cashierShifts(): HasMany
    {
        return $this->hasMany(CashierShift::class);
    }

    public function receivedPayments(): HasMany
    {
        return $this->hasMany(Payment::class, 'received_by');
    }

    public function cashMovements(): HasMany
    {
        return $this->hasMany(CashMovement::class, 'created_by');
    }
}

```
</details>

<a id="file-appmodelsuseroutletaccessphp"></a>
### app\Models\UserOutletAccess.php
- SHA: `6094a73890e7`  
- Ukuran: 655 B  
- Namespace: `App\Models`

**Class `UserOutletAccess` extends `Model`**

Metode Publik:
- **user**() : *BelongsTo*
- **outlet**() : *BelongsTo*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserOutletAccess extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'outlet_id',
        'is_default',
    ];

    protected function casts(): array
    {
        return [
            'is_default' => 'boolean',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }
}

```
</details>

<a id="file-appmodelsvoucherphp"></a>
### app\Models\Voucher.php
- SHA: `616b81ddca02`  
- Ukuran: 892 B  
- Namespace: `App\Models`

**Class `Voucher` extends `Model`**
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'description',
        'discount_type',
        'discount_value',
        'max_discount',
        'min_order_total',
        'quota',
        'used_count',
        'starts_at',
        'ends_at',
        'is_active',
        'applies_to',
    ];

    protected function casts(): array
    {
        return [
            'discount_value' => 'decimal:2',
            'max_discount' => 'decimal:2',
            'min_order_total' => 'decimal:2',
            'quota' => 'integer',
            'used_count' => 'integer',
            'starts_at' => 'datetime',
            'ends_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }
}
```
</details>


## Providers (app/Providers)

<a id="file-appprovidersappserviceproviderphp"></a>
### app\Providers\AppServiceProvider.php
- SHA: `b244d73f7df6`  
- Ukuran: 616 B  
- Namespace: `App\Providers`

**Class `AppServiceProvider` extends `ServiceProvider`**

Metode Publik:
- **register**() : *void* — Register any application services.
- **boot**() : *void* — Register any application services.
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ResetPassword::createUrlUsing(function (object $notifiable, string $token) {
            return config('app.frontend_url')."/password-reset/$token?email={$notifiable->getEmailForPasswordReset()}";
        });
    }
}

```
</details>


## Services (app/Services)

<a id="file-appservicesauthauthservicephp"></a>
### app\Services\Auth\AuthService.php
- SHA: `380fa0405446`  
- Ukuran: 1 KB  
- Namespace: `App\Services\Auth`

**Class `AuthService`**

Metode Publik:
- **login**(string $login, string $password, ?string $deviceName = null) : *array*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthService
{
    public function login(string $login, string $password, ?string $deviceName = null): array
    {
        $user = User::query()
            ->where('email', $login)
            ->orWhere('username', $login)
            ->orWhere('phone', $login)
            ->first();

        if (! $user || ! Hash::check($password, $user->password)) {
            throw ValidationException::withMessages([
                'login' => ['Login atau password salah.'],
            ]);
        }

        if (! $user->is_active) {
            throw ValidationException::withMessages([
                'login' => ['User tidak aktif.'],
            ]);
        }

        $token = $user->createToken($deviceName ?: 'api-token')->plainTextToken;

        $user->forceFill([
            'last_login_at' => now(),
        ])->save();

        return [
            'token' => $token,
            'user' => $user->load('roles', 'permissions'),
        ];
    }
}

```
</details>

<a id="file-appservicescashiercashiershiftservicephp"></a>
### app\Services\Cashier\CashierShiftService.php
- SHA: `b5690c8586bf`  
- Ukuran: 6 KB  
- Namespace: `App\Services\Cashier`

**Class `CashierShiftService`**

Metode Publik:
- **open**(array $payload, int $userId) : *CashierShift*
- **update**(CashierShift $shift, array $payload) : *CashierShift*
- **close**(CashierShift $shift, array $payload, int $userId) : *CashierShift*
- **refreshExpectedCash**(CashierShift $shift) : *CashierShift*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Cashier;

use App\Models\CashierShift;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class CashierShiftService
{
    public function open(array $payload, int $userId): CashierShift
    {
        return DB::transaction(function () use ($payload, $userId) {
            $this->ensureUserCanAccessOutlet($userId, (int) $payload['outlet_id']);

            $hasOpenShift = CashierShift::query()
                ->where('outlet_id', (int) $payload['outlet_id'])
                ->where('user_id', $userId)
                ->where('status', 'open')
                ->exists();

            if ($hasOpenShift) {
                throw ValidationException::withMessages([
                    'outlet_id' => ['User ini masih memiliki shift open pada outlet tersebut.'],
                ]);
            }

            $openingCash = (float) ($payload['opening_cash'] ?? 0);

            $shift = CashierShift::create([
                'outlet_id' => $payload['outlet_id'],
                'user_id' => $userId,
                'shift_number' => $this->generateShiftNumber((int) $payload['outlet_id']),
                'opened_at' => $payload['opened_at'] ?? now(),
                'opening_cash' => $openingCash,
                'expected_cash' => $openingCash,
                'closing_cash' => 0,
                'cash_difference' => 0,
                'status' => 'open',
                'notes' => $payload['notes'] ?? null,
            ]);

            $shift->cashMovements()->create([
                'movement_type' => 'opening',
                'amount' => $openingCash,
                'reason' => 'Opening cash',
                'notes' => 'Modal awal shift',
                'created_by' => $userId,
            ]);

            return $shift->fresh()->load([
                'outlet',
                'user',
                'cashMovements.creator',
                'orders.payments.paymentMethod',
            ]);
        });
    }

    public function update(CashierShift $shift, array $payload): CashierShift
    {
        $shift->update([
            'notes' => array_key_exists('notes', $payload) ? $payload['notes'] : $shift->notes,
        ]);

        return $shift->fresh()->load([
            'outlet',
            'user',
            'cashMovements.creator',
            'orders.payments.paymentMethod',
        ]);
    }

    public function close(CashierShift $shift, array $payload, int $userId): CashierShift
    {
        return DB::transaction(function () use ($shift, $payload, $userId) {
            if ($shift->status !== 'open') {
                throw ValidationException::withMessages([
                    'status' => ['Shift kasir ini sudah ditutup.'],
                ]);
            }

            $expectedCash = $this->calculateExpectedCash($shift);
            $closingCash = (float) $payload['closing_cash'];
            $cashDifference = $closingCash - $expectedCash;

            $shift->update([
                'closed_at' => $payload['closed_at'] ?? now(),
                'expected_cash' => $expectedCash,
                'closing_cash' => $closingCash,
                'cash_difference' => $cashDifference,
                'status' => 'closed',
                'notes' => array_key_exists('notes', $payload)
                    ? $payload['notes']
                    : $shift->notes,
            ]);

            if ((float) $cashDifference !== 0.0) {
                $shift->cashMovements()->create([
                    'movement_type' => 'closing_adjustment',
                    'amount' => abs($cashDifference),
                    'reason' => $cashDifference > 0 ? 'Closing overage' : 'Closing shortage',
                    'notes' => 'Selisih saat tutup shift',
                    'created_by' => $userId,
                ]);
            }

            return $shift->fresh()->load([
                'outlet',
                'user',
                'cashMovements.creator',
                'orders.payments.paymentMethod',
            ]);
        });
    }

    public function refreshExpectedCash(CashierShift $shift): CashierShift
    {
        $shift->update([
            'expected_cash' => $this->calculateExpectedCash($shift),
        ]);

        return $shift->fresh()->load([
            'outlet',
            'user',
            'cashMovements.creator',
            'orders.payments.paymentMethod',
        ]);
    }

    private function calculateExpectedCash(CashierShift $shift): float
    {
        $cashSalesTotal = (float) Payment::query()
            ->where('status', 'paid')
            ->whereHas('paymentMethod', fn ($query) => $query->where('type', 'cash'))
            ->whereHas('order', fn ($query) => $query->where('cashier_shift_id', $shift->id))
            ->sum('amount');

        $cashInTotal = (float) $shift->cashMovements()
            ->where('movement_type', 'cash_in')
            ->sum('amount');

        $cashOutTotal = (float) $shift->cashMovements()
            ->where('movement_type', 'cash_out')
            ->sum('amount');

        return (float) $shift->opening_cash + $cashSalesTotal + $cashInTotal - $cashOutTotal;
    }

    private function generateShiftNumber(int $outletId): string
    {
        $datePart = now()->format('Ymd');
        $randomPart = strtoupper(Str::padLeft((string) random_int(1, 9999), 4, '0'));

        return 'SHIFT-' . $outletId . '-' . $datePart . '-' . $randomPart;
    }

    private function ensureUserCanAccessOutlet(int $userId, int $outletId): void
    {
        $user = User::query()
            ->with('roles', 'outletAccesses')
            ->findOrFail($userId);

        if ($user->hasRole('superadmin') || $user->hasRole('admin_pusat')) {
            return;
        }

        $hasAccess = $user->outletAccesses
            ->contains(fn ($access) => (int) $access->outlet_id === $outletId);

        if (!$hasAccess) {
            throw ValidationException::withMessages([
                'outlet_id' => ['User tidak memiliki akses ke outlet ini.'],
            ]);
        }
    }
}

```
</details>

<a id="file-appservicescashiercashmovementservicephp"></a>
### app\Services\Cashier\CashMovementService.php
- SHA: `3b80d31c4203`  
- Ukuran: 1 KB  
- Namespace: `App\Services\Cashier`

**Class `CashMovementService`**

Metode Publik:
- **__construct**(private readonly CashierShiftService $cashierShiftService)
- **create**(array $payload, ?int $userId = null) : *CashMovement*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Cashier;

use App\Models\CashMovement;
use App\Models\CashierShift;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class CashMovementService
{
    public function __construct(
        private readonly CashierShiftService $cashierShiftService
    ) {
    }

    public function create(array $payload, ?int $userId = null): CashMovement
    {
        return DB::transaction(function () use ($payload, $userId) {
            $shift = CashierShift::query()->findOrFail($payload['cashier_shift_id']);

            if ($shift->status !== 'open') {
                throw ValidationException::withMessages([
                    'cashier_shift_id' => ['Cash movement hanya bisa dibuat pada shift open.'],
                ]);
            }

            $movement = CashMovement::create([
                'cashier_shift_id' => $shift->id,
                'movement_type' => $payload['movement_type'],
                'amount' => $payload['amount'],
                'reason' => $payload['reason'] ?? null,
                'notes' => $payload['notes'] ?? null,
                'created_by' => $userId,
            ]);

            $this->cashierShiftService->refreshExpectedCash($shift);

            return $movement->fresh()->load([
                'cashierShift.outlet',
                'cashierShift.user',
                'creator',
            ]);
        });
    }
}

```
</details>

<a id="file-appservicescatalogproductservicephp"></a>
### app\Services\Catalog\ProductService.php
- SHA: `dfa157da5777`  
- Ukuran: 8 KB  
- Namespace: `App\Services\Catalog`

**Class `ProductService`**

Metode Publik:
- **create**(array $payload) : *Product*
- **update**(Product $product, array $payload) : *Product*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Catalog;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class ProductService
{
    public function create(array $payload): Product
    {
        return DB::transaction(function () use ($payload) {
            $prices = $payload['prices'] ?? [];
            $outletStatuses = $payload['outlet_statuses'] ?? [];
            $variantGroups = $payload['variant_groups'] ?? [];
            $modifierGroups = $payload['modifier_groups'] ?? [];
            $bundleItems = $payload['bundle_items'] ?? [];

            unset(
                $payload['prices'],
                $payload['outlet_statuses'],
                $payload['variant_groups'],
                $payload['modifier_groups'],
                $payload['bundle_items'],
            );

            $product = Product::create($payload);

            $this->validateBundleRules($product, $bundleItems);
            $this->syncPrices($product, $prices);
            $this->syncOutletStatuses($product, $outletStatuses);
            $this->syncVariantGroups($product, $variantGroups);
            $this->syncModifierGroups($product, $modifierGroups);
            $this->syncBundleItems($product, $bundleItems);

            return $this->loadRelations($product);
        });
    }

    public function update(Product $product, array $payload): Product
    {
        return DB::transaction(function () use ($product, $payload) {
            $hasPrices = array_key_exists('prices', $payload);
            $hasStatuses = array_key_exists('outlet_statuses', $payload);
            $hasVariantGroups = array_key_exists('variant_groups', $payload);
            $hasModifierGroups = array_key_exists('modifier_groups', $payload);
            $hasBundleItems = array_key_exists('bundle_items', $payload);

            $prices = $payload['prices'] ?? [];
            $outletStatuses = $payload['outlet_statuses'] ?? [];
            $variantGroups = $payload['variant_groups'] ?? [];
            $modifierGroups = $payload['modifier_groups'] ?? [];
            $bundleItems = $payload['bundle_items'] ?? [];

            unset(
                $payload['prices'],
                $payload['outlet_statuses'],
                $payload['variant_groups'],
                $payload['modifier_groups'],
                $payload['bundle_items'],
            );

            $product->update($payload);

            if ($hasBundleItems || (isset($payload['product_type']) && $product->product_type === 'bundle')) {
                $this->validateBundleRules($product, $bundleItems);
            }

            if ($hasPrices) {
                $this->syncPrices($product, $prices);
            }

            if ($hasStatuses) {
                $this->syncOutletStatuses($product, $outletStatuses);
            }

            if ($hasVariantGroups) {
                $this->syncVariantGroups($product, $variantGroups);
            }

            if ($hasModifierGroups) {
                $this->syncModifierGroups($product, $modifierGroups);
            }

            if ($hasBundleItems) {
                $this->syncBundleItems($product, $bundleItems);
            }

            return $this->loadRelations($product);
        });
    }

    private function syncPrices(Product $product, array $prices): void
    {
        $product->prices()->delete();

        foreach ($prices as $price) {
            $product->prices()->create([
                'outlet_id' => $price['outlet_id'],
                'price' => $price['price'],
                'dine_in_price' => $price['dine_in_price'] ?? null,
                'takeaway_price' => $price['takeaway_price'] ?? null,
                'delivery_price' => $price['delivery_price'] ?? null,
                'starts_at' => $price['starts_at'] ?? null,
                'ends_at' => $price['ends_at'] ?? null,
                'is_active' => $price['is_active'] ?? true,
            ]);
        }
    }

    private function syncOutletStatuses(Product $product, array $outletStatuses): void
    {
        $product->outletStatuses()->delete();

        foreach ($outletStatuses as $status) {
            $product->outletStatuses()->create([
                'outlet_id' => $status['outlet_id'],
                'is_available' => $status['is_available'] ?? true,
                'is_hidden' => $status['is_hidden'] ?? false,
                'daily_limit' => $status['daily_limit'] ?? null,
                'notes' => $status['notes'] ?? null,
            ]);
        }
    }

    private function syncVariantGroups(Product $product, array $variantGroups): void
    {
        $product->variantGroups()->delete();

        foreach ($variantGroups as $group) {
            $options = $group['options'] ?? [];
            unset($group['options']);

            $variantGroup = $product->variantGroups()->create([
                'name' => $group['name'],
                'selection_type' => $group['selection_type'],
                'is_required' => $group['is_required'] ?? true,
                'sort_order' => $group['sort_order'] ?? 0,
            ]);

            foreach ($options as $option) {
                $variantGroup->options()->create([
                    'name' => $option['name'],
                    'price_adjustment' => $option['price_adjustment'] ?? 0,
                    'sort_order' => $option['sort_order'] ?? 0,
                    'is_active' => $option['is_active'] ?? true,
                ]);
            }
        }
    }

    private function syncModifierGroups(Product $product, array $modifierGroups): void
    {
        $product->modifierGroups()->delete();

        foreach ($modifierGroups as $group) {
            $options = $group['options'] ?? [];
            unset($group['options']);

            $modifierGroup = $product->modifierGroups()->create([
                'name' => $group['name'],
                'min_select' => $group['min_select'] ?? 0,
                'max_select' => $group['max_select'] ?? 1,
                'is_required' => $group['is_required'] ?? false,
                'sort_order' => $group['sort_order'] ?? 0,
            ]);

            foreach ($options as $option) {
                $modifierGroup->options()->create([
                    'name' => $option['name'],
                    'price' => $option['price'] ?? 0,
                    'is_active' => $option['is_active'] ?? true,
                    'sort_order' => $option['sort_order'] ?? 0,
                ]);
            }
        }
    }

    private function syncBundleItems(Product $product, array $bundleItems): void
    {
        $product->bundleItems()->delete();

        foreach ($bundleItems as $item) {
            $product->bundleItems()->create([
                'bundled_product_id' => $item['bundled_product_id'],
                'qty' => $item['qty'],
            ]);
        }
    }

    private function validateBundleRules(Product $product, array $bundleItems): void
    {
        if ($product->product_type === 'bundle' && empty($bundleItems)) {
            throw ValidationException::withMessages([
                'bundle_items' => ['Produk bundle wajib memiliki minimal satu bundle item.'],
            ]);
        }

        foreach ($bundleItems as $index => $item) {
            if ((int) $item['bundled_product_id'] === (int) $product->id) {
                throw ValidationException::withMessages([
                    "bundle_items.$index.bundled_product_id" => ['Produk bundle tidak boleh membundle dirinya sendiri.'],
                ]);
            }
        }
    }

    private function loadRelations(Product $product): Product
    {
        return $product->fresh()->load([
            'category',
            'prices.outlet',
            'outletStatuses.outlet',
            'variantGroups.options',
            'modifierGroups.options',
            'bundleItems.bundledProduct',
        ]);
    }
}
```
</details>

<a id="file-appservicescustomercustomerservicephp"></a>
### app\Services\Customer\CustomerService.php
- SHA: `b780056a06ff`  
- Ukuran: 2 KB  
- Namespace: `App\Services\Customer`

**Class `CustomerService`**

Metode Publik:
- **create**(array $payload) : *Customer*
- **update**(Customer $customer, array $payload) : *Customer*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Customer;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class CustomerService
{
    public function create(array $payload): Customer
    {
        return DB::transaction(function () use ($payload) {
            $addresses = $payload['addresses'] ?? [];
            unset($payload['addresses']);

            $customer = Customer::create($payload);

            $this->syncAddresses($customer, $addresses);

            return $customer->fresh()->load('addresses');
        });
    }

    public function update(Customer $customer, array $payload): Customer
    {
        return DB::transaction(function () use ($customer, $payload) {
            $hasAddresses = array_key_exists('addresses', $payload);
            $addresses = $payload['addresses'] ?? [];

            unset($payload['addresses']);

            $customer->update($payload);

            if ($hasAddresses) {
                $this->syncAddresses($customer, $addresses);
            }

            return $customer->fresh()->load('addresses');
        });
    }

    private function syncAddresses(Customer $customer, array $addresses): void
    {
        if (empty($addresses)) {
            $customer->addresses()->delete();
            return;
        }

        $defaultCount = collect($addresses)
            ->filter(fn ($item) => (bool) ($item['is_default'] ?? false))
            ->count();

        if ($defaultCount > 1) {
            throw ValidationException::withMessages([
                'addresses' => ['Hanya boleh ada satu alamat default.'],
            ]);
        }

        if ($defaultCount === 0) {
            $addresses[0]['is_default'] = true;
        }

        $customer->addresses()->delete();

        foreach ($addresses as $address) {
            $customer->addresses()->create([
                'label' => $address['label'] ?? null,
                'recipient_name' => $address['recipient_name'] ?? null,
                'recipient_phone' => $address['recipient_phone'] ?? null,
                'address' => $address['address'],
                'city' => $address['city'] ?? null,
                'province' => $address['province'] ?? null,
                'postal_code' => $address['postal_code'] ?? null,
                'latitude' => $address['latitude'] ?? null,
                'longitude' => $address['longitude'] ?? null,
                'is_default' => $address['is_default'] ?? false,
            ]);
        }
    }
}
```
</details>

<a id="file-appservicesdeliverydeliveryservicephp"></a>
### app\Services\Delivery\DeliveryService.php
- SHA: `11b3bddc8720`  
- Ukuran: 7 KB  
- Namespace: `App\Services\Delivery`

**Class `DeliveryService`**

Metode Publik:
- **create**(array $payload) : *Delivery*
- **update**(Delivery $delivery, array $payload) : *Delivery*
- **assignCourier**(Delivery $delivery, int $courierId, ?string $notes = null) : *Delivery*
- **changeStatus**(Delivery $delivery, string $status, ?string $deliveredAt = null, ?string $notes = null) : *Delivery*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php
namespace App\Services\Delivery;

use App\Models\Delivery;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class DeliveryService
{
    public function create(array $payload): Delivery
    {
        return DB::transaction(function () use ($payload) {
            $order = Order::query()->findOrFail((int) $payload['order_id']);

            if (! in_array($order->order_channel, ['delivery', 'pickup', 'website'], true)) {
                throw ValidationException::withMessages([
                    'order_id' => ['Delivery hanya boleh dibuat untuk order channel delivery, pickup, atau website.'],
                ]);
            }

            if (Delivery::query()->where('order_id', $order->id)->exists()) {
                throw ValidationException::withMessages([
                    'order_id' => ['Delivery untuk order ini sudah ada.'],
                ]);
            }

            $status = $payload['delivery_status'] ?? 'pending';

            if (! empty($payload['courier_id']) && $status === 'pending') {
                $status = 'assigned';
            }

            $delivery = Delivery::query()->create([
                'order_id'            => $order->id,
                'customer_address_id' => $payload['customer_address_id'] ?? null,
                'courier_id'          => $payload['courier_id'] ?? null,
                'delivery_status'     => $status,
                'delivery_fee'        => $payload['delivery_fee'] ?? 0,
                'delivered_at'        => $payload['delivered_at'] ?? null,
                'notes'               => $payload['notes'] ?? null,
            ]);

            if ($delivery->delivery_status === 'delivered') {
                $this->completeOrderIfPossible($order, $payload['delivered_at'] ?? now());
            }

            return $delivery->load(['order.outlet', 'order.customer', 'customerAddress.customer', 'courier']);
        });
    }

    public function update(Delivery $delivery, array $payload): Delivery
    {
        return DB::transaction(function () use ($delivery, $payload) {
            if (in_array($delivery->delivery_status, ['delivered', 'cancelled'], true)) {
                throw ValidationException::withMessages([
                    'delivery_status' => ['Delivery yang sudah delivered atau cancelled tidak boleh diubah.'],
                ]);
            }

            $delivery->update([
                'customer_address_id' => array_key_exists('customer_address_id', $payload) ? $payload['customer_address_id'] : $delivery->customer_address_id,
                'courier_id'          => array_key_exists('courier_id', $payload) ? $payload['courier_id'] : $delivery->courier_id,
                'delivery_status'     => array_key_exists('delivery_status', $payload) ? $payload['delivery_status'] : $delivery->delivery_status,
                'delivery_fee'        => array_key_exists('delivery_fee', $payload) ? $payload['delivery_fee'] : $delivery->delivery_fee,
                'delivered_at'        => array_key_exists('delivered_at', $payload) ? $payload['delivered_at'] : $delivery->delivered_at,
                'notes'               => array_key_exists('notes', $payload) ? $payload['notes'] : $delivery->notes,
            ]);

            if ($delivery->delivery_status === 'delivered') {
                $this->completeOrderIfPossible($delivery->order, $delivery->delivered_at ?? now());
            }

            return $delivery->fresh()->load(['order.outlet', 'order.customer', 'customerAddress.customer', 'courier']);
        });
    }

    public function assignCourier(Delivery $delivery, int $courierId, ?string $notes = null): Delivery
    {
        return DB::transaction(function () use ($delivery, $courierId, $notes) {
            if (in_array($delivery->delivery_status, ['delivered', 'failed', 'cancelled'], true)) {
                throw ValidationException::withMessages([
                    'delivery_status' => ['Courier tidak bisa di-assign untuk delivery yang sudah final.'],
                ]);
            }

            $delivery->update([
                'courier_id'      => $courierId,
                'delivery_status' => 'assigned',
                'notes'           => $notes ?? $delivery->notes,
            ]);

            return $delivery->fresh()->load(['order.outlet', 'order.customer', 'customerAddress.customer', 'courier']);
        });
    }

    public function changeStatus(Delivery $delivery, string $status, ?string $deliveredAt = null, ?string $notes = null): Delivery
    {
        return DB::transaction(function () use ($delivery, $status, $deliveredAt, $notes) {
            $this->ensureValidTransition($delivery->delivery_status, $status);

            $payload = [
                'delivery_status' => $status,
                'notes'           => $notes ?? $delivery->notes,
            ];

            if ($status === 'delivered') {
                $payload['delivered_at'] = $deliveredAt ?? now();
            }

            $delivery->update($payload);

            if ($status === 'delivered') {
                $this->completeOrderIfPossible($delivery->order, $payload['delivered_at']);
            }

            if ($status === 'cancelled') {
                $delivery->order?->update([
                    'order_status' => 'cancelled',
                    'cancelled_at' => now(),
                ]);
            }

            return $delivery->fresh()->load(['order.outlet', 'order.customer', 'customerAddress.customer', 'courier']);
        });
    }

    private function ensureValidTransition(string $currentStatus, string $nextStatus): void
    {
        if ($currentStatus === $nextStatus) {
            return;
        }

        $allowed = [
            'pending'    => ['assigned', 'cancelled', 'failed'],
            'assigned'   => ['on_the_way', 'cancelled', 'failed'],
            'on_the_way' => ['delivered', 'failed', 'cancelled'],
            'delivered'  => [],
            'failed'     => [],
            'cancelled'  => [],
        ];

        if (! in_array($nextStatus, $allowed[$currentStatus] ?? [], true)) {
            throw ValidationException::withMessages([
                'delivery_status' => ["Perubahan status dari {$currentStatus} ke {$nextStatus} tidak valid."],
            ]);
        }
    }

    private function completeOrderIfPossible(?Order $order, mixed $completedAt): void
    {
        if (! $order) {
            return;
        }

        if (! in_array($order->order_status, ['completed', 'cancelled'], true)) {
            $order->update([
                'order_status' => 'completed',
                'completed_at' => $completedAt,
            ]);

            $order->statusHistories()->create([
                'status'     => 'completed',
                'changed_by' => Auth::id(),
                'notes'      => 'Order selesai melalui delivery.',
                'changed_at' => $completedAt,
            ]);
        }
    }
}

```
</details>

<a id="file-appservicesexpenseexpenseservicephp"></a>
### app\Services\Expense\ExpenseService.php
- SHA: `9c8a55bbe139`  
- Ukuran: 9 KB  
- Namespace: `App\Services\Expense`

**Class `ExpenseService`**

Metode Publik:
- **create**(array $payload, ?int $userId = null) : *Expense*
- **update**(Expense $expense, array $payload) : *Expense*
- **submit**(Expense $expense) : *Expense*
- **approve**(Expense $expense, array $payload, int $userId) : *Expense*
- **reject**(Expense $expense, ?string $notes = null) : *Expense*
- **addAttachments**(Expense $expense, array $attachments) : *Expense*
- **deleteAttachment**(ExpenseAttachment $attachment) : *void*
- **delete**(Expense $expense) : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php
namespace App\Services\Expense;

use App\Models\CashierShift;
use App\Models\CashMovement;
use App\Models\Expense;
use App\Models\ExpenseAttachment;
use App\Models\ExpenseCategory;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class ExpenseService
{
    public function create(array $payload, ?int $userId = null): Expense
    {
        return DB::transaction(function () use ($payload, $userId) {
            $this->ensureUserCanAccessOutlet($userId, (int) $payload['outlet_id']);
            $this->ensureActiveCategory((int) $payload['expense_category_id']);

            $attachments = $payload['attachments'] ?? [];
            unset($payload['attachments']);

            $expense = Expense::query()->create([
                'outlet_id'           => $payload['outlet_id'],
                'expense_category_id' => $payload['expense_category_id'],
                'expense_date'        => $payload['expense_date'],
                'amount'              => $payload['amount'],
                'description'         => $payload['description'] ?? null,
                'status'              => $payload['status'] ?? 'draft',
                'created_by'          => $userId,
            ]);

            $this->storeAttachments($expense, $attachments);

            return $expense->fresh()->load($this->defaultRelations())->loadCount('attachments');
        });
    }

    public function update(Expense $expense, array $payload): Expense
    {
        return DB::transaction(function () use ($expense, $payload) {
            if ($expense->status === 'approved') {
                throw ValidationException::withMessages([
                    'status' => ['Expense yang sudah approved tidak boleh diubah.'],
                ]);
            }

            if (array_key_exists('outlet_id', $payload)) {
                $this->ensureUserCanAccessOutlet(request()->user()?->id, (int) $payload['outlet_id']);
            }

            if (array_key_exists('expense_category_id', $payload)) {
                $this->ensureActiveCategory((int) $payload['expense_category_id']);
            }

            $expense->update($payload);

            return $expense->fresh()->load($this->defaultRelations())->loadCount('attachments');
        });
    }

    public function submit(Expense $expense): Expense
    {
        if (! in_array($expense->status, ['draft', 'rejected'], true)) {
            throw ValidationException::withMessages([
                'status' => ['Hanya expense draft atau rejected yang boleh disubmit.'],
            ]);
        }

        $expense->update([
            'status' => 'submitted',
        ]);

        return $expense->fresh()->load($this->defaultRelations())->loadCount('attachments');
    }

    public function approve(Expense $expense, array $payload, int $userId): Expense
    {
        return DB::transaction(function () use ($expense, $payload, $userId) {
            if ($expense->status !== 'submitted') {
                throw ValidationException::withMessages([
                    'status' => ['Hanya expense submitted yang boleh diapprove.'],
                ]);
            }

            $cashierShiftId = $payload['cashier_shift_id'] ?? null;

            if ($cashierShiftId) {
                $shift = CashierShift::query()->findOrFail($cashierShiftId);

                if ((int) $shift->outlet_id !== (int) $expense->outlet_id) {
                    throw ValidationException::withMessages([
                        'cashier_shift_id' => ['Shift kasir harus berasal dari outlet yang sama dengan expense.'],
                    ]);
                }

                if ($shift->status !== 'open') {
                    throw ValidationException::withMessages([
                        'cashier_shift_id' => ['Cash movement hanya bisa dibuat pada shift yang masih open.'],
                    ]);
                }

                CashMovement::query()->create([
                    'cashier_shift_id' => $shift->id,
                    'movement_type'    => 'cash_out',
                    'amount'           => $expense->amount,
                    'reason'           => 'Expense #' . $expense->id,
                    'notes'            => $payload['notes'] ?? $expense->description,
                    'created_by'       => $userId,
                ]);

                $this->refreshShiftExpectedCash($shift);
            }

            $expense->update([
                'status'      => 'approved',
                'approved_by' => $userId,
                'approved_at' => $payload['approved_at'] ?? now(),
            ]);

            return $expense->fresh()->load($this->defaultRelations())->loadCount('attachments');
        });
    }

    public function reject(Expense $expense, ?string $notes = null): Expense
    {
        if ($expense->status !== 'submitted') {
            throw ValidationException::withMessages([
                'status' => ['Hanya expense submitted yang boleh direject.'],
            ]);
        }

        $description = $expense->description;

        if ($notes) {
            $description = trim(($description ? $description . PHP_EOL : '') . 'Rejected note: ' . $notes);
        }

        $expense->update([
            'status'      => 'rejected',
            'description' => $description,
            'approved_by' => null,
            'approved_at' => null,
        ]);

        return $expense->fresh()->load($this->defaultRelations())->loadCount('attachments');
    }

    public function addAttachments(Expense $expense, array $attachments): Expense
    {
        if ($expense->status === 'approved') {
            throw ValidationException::withMessages([
                'status' => ['Attachment tidak boleh ditambahkan pada expense yang sudah approved.'],
            ]);
        }

        $this->storeAttachments($expense, $attachments);

        return $expense->fresh()->load($this->defaultRelations())->loadCount('attachments');
    }

    public function deleteAttachment(ExpenseAttachment $attachment): void
    {
        $expense = $attachment->expense;

        if ($expense && $expense->status === 'approved') {
            throw ValidationException::withMessages([
                'status' => ['Attachment expense approved tidak boleh dihapus.'],
            ]);
        }

        if ($attachment->file_path) {
            Storage::disk('public')->delete($attachment->file_path);
        }

        $attachment->delete();
    }

    public function delete(Expense $expense): void
    {
        if ($expense->status === 'approved') {
            throw ValidationException::withMessages([
                'status' => ['Expense approved tidak boleh dihapus.'],
            ]);
        }

        $expense->delete();
    }

    private function storeAttachments(Expense $expense, array $attachments): void
    {
        foreach ($attachments as $attachment) {
            if (! $attachment instanceof UploadedFile) {
                continue;
            }

            $path = $attachment->store('expenses/' . $expense->id, 'public');

            $expense->attachments()->create([
                'file_path' => $path,
                'file_name' => $attachment->getClientOriginalName(),
                'mime_type' => $attachment->getClientMimeType(),
            ]);
        }
    }

    private function ensureActiveCategory(int $categoryId): void
    {
        $exists = ExpenseCategory::query()
            ->whereKey($categoryId)
            ->where('is_active', true)
            ->exists();

        if (! $exists) {
            throw ValidationException::withMessages([
                'expense_category_id' => ['Kategori expense tidak ditemukan atau tidak aktif.'],
            ]);
        }
    }

    private function ensureUserCanAccessOutlet(?int $userId, int $outletId): void
    {
        if (! $userId) {
            return;
        }

        $user = User::query()
            ->with('roles', 'outletAccesses')
            ->findOrFail($userId);

        if ($user->hasRole('superadmin') || $user->hasRole('admin_pusat')) {
            return;
        }

        $hasAccess = $user->outletAccesses
            ->contains(fn($access) => (int) $access->outlet_id === $outletId);

        if (! $hasAccess) {
            throw ValidationException::withMessages([
                'outlet_id' => ['User tidak memiliki akses ke outlet ini.'],
            ]);
        }
    }

    private function refreshShiftExpectedCash(CashierShift $shift): void
    {
        $cashSalesTotal = (float) $shift->orders()
            ->whereHas('payments.paymentMethod', fn($query) => $query->where('type', 'cash'))
            ->with('payments.paymentMethod')
            ->get()
            ->flatMap->payments
            ->filter(fn($payment) => $payment->status === 'paid' && $payment->paymentMethod?->type === 'cash')
            ->sum('amount');

        $cashInTotal = (float) $shift->cashMovements()
            ->where('movement_type', 'cash_in')
            ->sum('amount');

        $cashOutTotal = (float) $shift->cashMovements()
            ->where('movement_type', 'cash_out')
            ->sum('amount');

        $shift->update([
            'expected_cash' => (float) $shift->opening_cash + $cashSalesTotal + $cashInTotal - $cashOutTotal,
        ]);
    }

    private function defaultRelations(): array
    {
        return [
            'outlet',
            'category',
            'creator',
            'approver',
            'attachments',
        ];
    }
}

```
</details>

<a id="file-appservicesinventoryoutletmaterialstockservicephp"></a>
### app\Services\Inventory\OutletMaterialStockService.php
- SHA: `812f1d318b70`  
- Ukuran: 713 B  
- Namespace: `App\Services\Inventory`

**Class `OutletMaterialStockService`**

Metode Publik:
- **upsert**(array $payload) : *OutletMaterialStock*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Inventory;

use App\Models\OutletMaterialStock;

class OutletMaterialStockService
{
    public function upsert(array $payload): OutletMaterialStock
    {
        $stock = OutletMaterialStock::query()->updateOrCreate(
            [
                'outlet_id' => $payload['outlet_id'],
                'raw_material_id' => $payload['raw_material_id'],
            ],
            [
                'qty_on_hand' => $payload['qty_on_hand'] ?? 0,
                'qty_reserved' => $payload['qty_reserved'] ?? 0,
                'last_movement_at' => $payload['last_movement_at'] ?? null,
            ]
        );

        return $stock->fresh()->load(['outlet', 'rawMaterial']);
    }
}

```
</details>

<a id="file-appservicesinventoryproductbomservicephp"></a>
### app\Services\Inventory\ProductBomService.php
- SHA: `089edfab7fa5`  
- Ukuran: 2 KB  
- Namespace: `App\Services\Inventory`

**Class `ProductBomService`**

Metode Publik:
- **create**(array $payload) : *ProductBom*
- **update**(ProductBom $bom, array $payload) : *ProductBom*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Inventory;

use App\Models\ProductBom;
use Illuminate\Support\Facades\DB;

class ProductBomService
{
    public function create(array $payload): ProductBom
    {
        return DB::transaction(function () use ($payload) {
            $items = $payload['items'] ?? [];
            unset($payload['items']);

            if (($payload['is_active'] ?? true) === true) {
                ProductBom::query()
                    ->where('product_id', $payload['product_id'])
                    ->update(['is_active' => false]);
            }

            $bom = ProductBom::create($payload);

            foreach ($items as $item) {
                $bom->items()->create([
                    'raw_material_id' => $item['raw_material_id'],
                    'unit_id' => $item['unit_id'],
                    'qty' => $item['qty'],
                    'waste_percent' => $item['waste_percent'] ?? 0,
                ]);
            }

            return $bom->load(['product', 'items.rawMaterial', 'items.unit']);
        });
    }

    public function update(ProductBom $bom, array $payload): ProductBom
    {
        return DB::transaction(function () use ($bom, $payload) {
            $items = $payload['items'] ?? null;
            unset($payload['items']);

            $targetProductId = $payload['product_id'] ?? $bom->product_id;
            $targetIsActive = $payload['is_active'] ?? $bom->is_active;

            if ($targetIsActive) {
                ProductBom::query()
                    ->where('product_id', $targetProductId)
                    ->where('id', '!=', $bom->id)
                    ->update(['is_active' => false]);
            }

            $bom->update($payload);

            if (is_array($items)) {
                $bom->items()->delete();

                foreach ($items as $item) {
                    $bom->items()->create([
                        'raw_material_id' => $item['raw_material_id'],
                        'unit_id' => $item['unit_id'],
                        'qty' => $item['qty'],
                        'waste_percent' => $item['waste_percent'] ?? 0,
                    ]);
                }
            }

            return $bom->fresh()->load(['product', 'items.rawMaterial', 'items.unit']);
        });
    }
}

```
</details>

<a id="file-appservicesinventoryrawmaterialservicephp"></a>
### app\Services\Inventory\RawMaterialService.php
- SHA: `7c90905f3969`  
- Ukuran: 2 KB  
- Namespace: `App\Services\Inventory`

**Class `RawMaterialService`**

Metode Publik:
- **create**(array $payload) : *RawMaterial*
- **update**(RawMaterial $rawMaterial, array $payload) : *RawMaterial*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Inventory;

use App\Models\RawMaterial;
use Illuminate\Support\Facades\DB;

class RawMaterialService
{
    public function create(array $payload): RawMaterial
    {
        return DB::transaction(function () use ($payload) {
            $stocks = $payload['outlet_stocks'] ?? [];
            unset($payload['outlet_stocks']);

            $rawMaterial = RawMaterial::create($payload);

            foreach ($stocks as $stock) {
                $rawMaterial->outletStocks()->create([
                    'outlet_id' => $stock['outlet_id'],
                    'qty_on_hand' => $stock['qty_on_hand'] ?? 0,
                    'qty_reserved' => $stock['qty_reserved'] ?? 0,
                    'last_movement_at' => $stock['last_movement_at'] ?? null,
                ]);
            }

            return $rawMaterial->load(['category', 'unit', 'outletStocks.outlet']);
        });
    }

    public function update(RawMaterial $rawMaterial, array $payload): RawMaterial
    {
        return DB::transaction(function () use ($rawMaterial, $payload) {
            $stocks = $payload['outlet_stocks'] ?? null;
            unset($payload['outlet_stocks']);

            $rawMaterial->update($payload);

            if (is_array($stocks)) {
                $rawMaterial->outletStocks()->delete();

                foreach ($stocks as $stock) {
                    $rawMaterial->outletStocks()->create([
                        'outlet_id' => $stock['outlet_id'],
                        'qty_on_hand' => $stock['qty_on_hand'] ?? 0,
                        'qty_reserved' => $stock['qty_reserved'] ?? 0,
                        'last_movement_at' => $stock['last_movement_at'] ?? null,
                    ]);
                }
            }

            return $rawMaterial->fresh()->load(['category', 'unit', 'outletStocks.outlet']);
        });
    }
}

```
</details>

<a id="file-appservicesinventorystockadjustmentservicephp"></a>
### app\Services\Inventory\StockAdjustmentService.php
- SHA: `27561588c5bc`  
- Ukuran: 4 KB  
- Namespace: `App\Services\Inventory`

**Class `StockAdjustmentService`**

Metode Publik:
- **__construct**(private readonly StockMovementService $stockMovementService)
- **create**(array $payload, ?int $userId = null) : *StockAdjustment*
- **update**(StockAdjustment $adjustment, array $payload) : *StockAdjustment*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Inventory;

use App\Models\StockAdjustment;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class StockAdjustmentService
{
    public function __construct(
        private readonly StockMovementService $stockMovementService
    ) {
    }

    public function create(array $payload, ?int $userId = null): StockAdjustment
    {
        return DB::transaction(function () use ($payload, $userId) {
            $items = $payload['items'] ?? [];
            unset($payload['items']);

            if (empty($payload['adjustment_number'])) {
                $payload['adjustment_number'] = $this->generateAdjustmentNumber((int) $payload['outlet_id']);
            }

            $payload['created_by'] = $payload['created_by'] ?? $userId;

            $adjustment = StockAdjustment::create($payload);

            foreach ($items as $item) {
                $adjustment->items()->create([
                    'raw_material_id' => $item['raw_material_id'],
                    'qty_difference' => $item['qty_difference'],
                    'unit_id' => $item['unit_id'],
                    'notes' => $item['notes'] ?? null,
                ]);
            }

            $this->stockMovementService->create([
                'outlet_id' => $adjustment->outlet_id,
                'movement_type' => $payload['reason'] === 'waste' ? 'waste' : 'adjustment',
                'reference_type' => StockAdjustment::class,
                'reference_id' => $adjustment->id,
                'movement_date' => $adjustment->adjustment_date,
                'notes' => $adjustment->notes,
                'created_by' => $adjustment->created_by,
                'items' => collect($items)->map(function (array $item) {
                    $qtyDifference = (float) $item['qty_difference'];

                    return [
                        'raw_material_id' => $item['raw_material_id'],
                        'qty_in' => $qtyDifference > 0 ? $qtyDifference : 0,
                        'qty_out' => $qtyDifference < 0 ? abs($qtyDifference) : 0,
                        'unit_cost' => 0,
                        'notes' => $item['notes'] ?? null,
                    ];
                })->all(),
            ]);

            return $adjustment->fresh()->load(['outlet', 'creator', 'approver', 'items.rawMaterial', 'items.unit']);
        });
    }

    public function update(StockAdjustment $adjustment, array $payload): StockAdjustment
    {
        if ($adjustment->approved_at !== null) {
            throw ValidationException::withMessages([
                'approved_at' => ['Stock adjustment yang sudah approved tidak boleh diubah.'],
            ]);
        }

        return DB::transaction(function () use ($adjustment, $payload) {
            $items = $payload['items'] ?? null;
            unset($payload['items']);

            $adjustment->update($payload);

            if (is_array($items)) {
                $adjustment->items()->delete();

                foreach ($items as $item) {
                    $adjustment->items()->create([
                        'raw_material_id' => $item['raw_material_id'],
                        'qty_difference' => $item['qty_difference'],
                        'unit_id' => $item['unit_id'],
                        'notes' => $item['notes'] ?? null,
                    ]);
                }
            }

            return $adjustment->fresh()->load(['outlet', 'creator', 'approver', 'items.rawMaterial', 'items.unit']);
        });
    }

    private function generateAdjustmentNumber(int $outletId): string
    {
        $count = StockAdjustment::query()
            ->where('outlet_id', $outletId)
            ->whereDate('created_at', now()->toDateString())
            ->count() + 1;

        return 'ADJ-' . $outletId . '-' . now()->format('Ymd') . '-' . str_pad((string) $count, 4, '0', STR_PAD_LEFT);
    }
}

```
</details>

<a id="file-appservicesinventorystockmovementservicephp"></a>
### app\Services\Inventory\StockMovementService.php
- SHA: `84fa847b28da`  
- Ukuran: 2 KB  
- Namespace: `App\Services\Inventory`

**Class `StockMovementService`**

Metode Publik:
- **create**(array $payload) : *StockMovement*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Inventory;

use App\Models\OutletMaterialStock;
use App\Models\StockMovement;
use Illuminate\Support\Facades\DB;

class StockMovementService
{
    public function create(array $payload): StockMovement
    {
        return DB::transaction(function () use ($payload) {
            $items = $payload['items'] ?? [];
            unset($payload['items']);

            $movement = StockMovement::create($payload);

            foreach ($items as $item) {
                $movement->items()->create([
                    'raw_material_id' => $item['raw_material_id'],
                    'qty_in' => $item['qty_in'] ?? 0,
                    'qty_out' => $item['qty_out'] ?? 0,
                    'unit_cost' => $item['unit_cost'] ?? 0,
                    'notes' => $item['notes'] ?? null,
                ]);

                $stock = OutletMaterialStock::query()->firstOrCreate(
                    [
                        'outlet_id' => $movement->outlet_id,
                        'raw_material_id' => $item['raw_material_id'],
                    ],
                    [
                        'qty_on_hand' => 0,
                        'qty_reserved' => 0,
                        'last_movement_at' => $movement->movement_date,
                    ]
                );

                $stock->update([
                    'qty_on_hand' => (float) $stock->qty_on_hand + (float) ($item['qty_in'] ?? 0) - (float) ($item['qty_out'] ?? 0),
                    'last_movement_at' => $movement->movement_date,
                ]);
            }

            return $movement->fresh()->load(['outlet', 'creator', 'items.rawMaterial']);
        });
    }
}

```
</details>

<a id="file-appservicesinventorystockopnameservicephp"></a>
### app\Services\Inventory\StockOpnameService.php
- SHA: `2750252d817c`  
- Ukuran: 7 KB  
- Namespace: `App\Services\Inventory`

**Class `StockOpnameService`**

Metode Publik:
- **__construct**(private readonly StockMovementService $stockMovementService)
- **create**(array $payload, ?int $userId = null) : *StockOpname*
- **update**(StockOpname $opname, array $payload) : *StockOpname*
- **post**(StockOpname $opname, int $userId, ?string $postedAt = null) : *StockOpname*
- **cancel**(StockOpname $opname) : *StockOpname*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Inventory;

use App\Models\OutletMaterialStock;
use App\Models\StockOpname;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class StockOpnameService
{
    public function __construct(
        private readonly StockMovementService $stockMovementService
    ) {
    }

    public function create(array $payload, ?int $userId = null): StockOpname
    {
        return DB::transaction(function () use ($payload, $userId) {
            $items = $payload['items'] ?? [];
            unset($payload['items']);

            if (empty($payload['opname_number'])) {
                $payload['opname_number'] = $this->generateOpnameNumber((int) $payload['outlet_id']);
            }

            $payload['created_by'] = $payload['created_by'] ?? $userId;
            $payload['status'] = $payload['status'] ?? 'draft';

            $opname = StockOpname::create($payload);

            foreach ($items as $item) {
                $stock = OutletMaterialStock::query()->firstOrCreate(
                    [
                        'outlet_id' => $payload['outlet_id'],
                        'raw_material_id' => $item['raw_material_id'],
                    ],
                    [
                        'qty_on_hand' => 0,
                        'qty_reserved' => 0,
                        'last_movement_at' => null,
                    ]
                );

                $systemQty = array_key_exists('system_qty', $item)
                    ? (float) $item['system_qty']
                    : (float) $stock->qty_on_hand;

                $actualQty = (float) $item['actual_qty'];

                $opname->items()->create([
                    'raw_material_id' => $item['raw_material_id'],
                    'system_qty' => $systemQty,
                    'actual_qty' => $actualQty,
                    'difference_qty' => $actualQty - $systemQty,
                    'unit_id' => $item['unit_id'],
                    'notes' => $item['notes'] ?? null,
                ]);
            }

            return $opname->fresh()->load(['outlet', 'creator', 'poster', 'items.rawMaterial', 'items.unit']);
        });
    }

    public function update(StockOpname $opname, array $payload): StockOpname
    {
        if ($opname->status !== 'draft') {
            throw ValidationException::withMessages([
                'status' => ['Hanya stock opname draft yang boleh diubah.'],
            ]);
        }

        return DB::transaction(function () use ($opname, $payload) {
            $items = $payload['items'] ?? null;
            unset($payload['items']);

            $opname->update($payload);

            if (is_array($items)) {
                $opname->items()->delete();

                foreach ($items as $item) {
                    $stock = OutletMaterialStock::query()->firstOrCreate(
                        [
                            'outlet_id' => $opname->outlet_id,
                            'raw_material_id' => $item['raw_material_id'],
                        ],
                        [
                            'qty_on_hand' => 0,
                            'qty_reserved' => 0,
                            'last_movement_at' => null,
                        ]
                    );

                    $systemQty = array_key_exists('system_qty', $item)
                        ? (float) $item['system_qty']
                        : (float) $stock->qty_on_hand;

                    $actualQty = (float) $item['actual_qty'];

                    $opname->items()->create([
                        'raw_material_id' => $item['raw_material_id'],
                        'system_qty' => $systemQty,
                        'actual_qty' => $actualQty,
                        'difference_qty' => $actualQty - $systemQty,
                        'unit_id' => $item['unit_id'],
                        'notes' => $item['notes'] ?? null,
                    ]);
                }
            }

            return $opname->fresh()->load(['outlet', 'creator', 'poster', 'items.rawMaterial', 'items.unit']);
        });
    }

    public function post(StockOpname $opname, int $userId, ?string $postedAt = null): StockOpname
    {
        if ($opname->status !== 'draft') {
            throw ValidationException::withMessages([
                'status' => ['Hanya stock opname draft yang bisa dipost.'],
            ]);
        }

        return DB::transaction(function () use ($opname, $userId, $postedAt) {
            $effectivePostedAt = $postedAt ? now()->parse($postedAt) : now();

            $this->stockMovementService->create([
                'outlet_id' => $opname->outlet_id,
                'movement_type' => 'opname',
                'reference_type' => StockOpname::class,
                'reference_id' => $opname->id,
                'movement_date' => $effectivePostedAt,
                'notes' => $opname->notes,
                'created_by' => $userId,
                'items' => $opname->items->map(function ($item) {
                    $differenceQty = (float) $item->difference_qty;

                    return [
                        'raw_material_id' => $item->raw_material_id,
                        'qty_in' => $differenceQty > 0 ? $differenceQty : 0,
                        'qty_out' => $differenceQty < 0 ? abs($differenceQty) : 0,
                        'unit_cost' => 0,
                        'notes' => $item->notes,
                    ];
                })->all(),
            ]);

            $opname->update([
                'status' => 'posted',
                'posted_by' => $userId,
                'posted_at' => $effectivePostedAt,
            ]);

            return $opname->fresh()->load(['outlet', 'creator', 'poster', 'items.rawMaterial', 'items.unit']);
        });
    }

    public function cancel(StockOpname $opname): StockOpname
    {
        if ($opname->status === 'posted') {
            throw ValidationException::withMessages([
                'status' => ['Stock opname yang sudah posted tidak bisa dibatalkan.'],
            ]);
        }

        $opname->update([
            'status' => 'cancelled',
        ]);

        return $opname->fresh()->load(['outlet', 'creator', 'poster', 'items.rawMaterial', 'items.unit']);
    }

    private function generateOpnameNumber(int $outletId): string
    {
        $count = StockOpname::query()
            ->where('outlet_id', $outletId)
            ->whereDate('created_at', now()->toDateString())
            ->count() + 1;

        return 'OPN-' . $outletId . '-' . now()->format('Ymd') . '-' . str_pad((string) $count, 4, '0', STR_PAD_LEFT);
    }
}

```
</details>

<a id="file-appservicesinventorystocktransferservicephp"></a>
### app\Services\Inventory\StockTransferService.php
- SHA: `f9dd017b3fd6`  
- Ukuran: 8 KB  
- Namespace: `App\Services\Inventory`

**Class `StockTransferService`**

Metode Publik:
- **__construct**(private readonly StockMovementService $stockMovementService)
- **create**(array $payload, ?int $userId = null) : *StockTransfer*
- **update**(StockTransfer $transfer, array $payload) : *StockTransfer*
- **send**(StockTransfer $transfer, ?string $sentAt = null) : *StockTransfer*
- **receive**(StockTransfer $transfer, array $payload, int $userId) : *StockTransfer*
- **cancel**(StockTransfer $transfer) : *StockTransfer*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Inventory;

use App\Models\OutletMaterialStock;
use App\Models\StockTransfer;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class StockTransferService
{
    public function __construct(
        private readonly StockMovementService $stockMovementService
    ) {
    }

    public function create(array $payload, ?int $userId = null): StockTransfer
    {
        return DB::transaction(function () use ($payload, $userId) {
            $items = $payload['items'] ?? [];
            unset($payload['items']);

            if (empty($payload['transfer_number'])) {
                $payload['transfer_number'] = $this->generateTransferNumber((int) $payload['source_outlet_id']);
            }

            $payload['created_by'] = $payload['created_by'] ?? $userId;
            $payload['status'] = $payload['status'] ?? 'draft';

            $transfer = StockTransfer::create($payload);

            foreach ($items as $item) {
                $transfer->items()->create([
                    'raw_material_id' => $item['raw_material_id'],
                    'qty_sent' => $item['qty_sent'],
                    'qty_received' => $item['qty_received'] ?? null,
                    'unit_id' => $item['unit_id'],
                    'notes' => $item['notes'] ?? null,
                ]);
            }

            return $transfer->fresh()->load(['sourceOutlet', 'targetOutlet', 'creator', 'receiver', 'items.rawMaterial', 'items.unit']);
        });
    }

    public function update(StockTransfer $transfer, array $payload): StockTransfer
    {
        if ($transfer->status !== 'draft') {
            throw ValidationException::withMessages([
                'status' => ['Hanya stock transfer draft yang boleh diubah.'],
            ]);
        }

        return DB::transaction(function () use ($transfer, $payload) {
            $items = $payload['items'] ?? null;
            unset($payload['items']);

            $transfer->update($payload);

            if (is_array($items)) {
                $transfer->items()->delete();

                foreach ($items as $item) {
                    $transfer->items()->create([
                        'raw_material_id' => $item['raw_material_id'],
                        'qty_sent' => $item['qty_sent'],
                        'qty_received' => $item['qty_received'] ?? null,
                        'unit_id' => $item['unit_id'],
                        'notes' => $item['notes'] ?? null,
                    ]);
                }
            }

            return $transfer->fresh()->load(['sourceOutlet', 'targetOutlet', 'creator', 'receiver', 'items.rawMaterial', 'items.unit']);
        });
    }

    public function send(StockTransfer $transfer, ?string $sentAt = null): StockTransfer
    {
        if ($transfer->status !== 'draft') {
            throw ValidationException::withMessages([
                'status' => ['Hanya stock transfer draft yang bisa dikirim.'],
            ]);
        }

        return DB::transaction(function () use ($transfer, $sentAt) {
            foreach ($transfer->items as $item) {
                $stock = OutletMaterialStock::query()->firstOrCreate(
                    [
                        'outlet_id' => $transfer->source_outlet_id,
                        'raw_material_id' => $item->raw_material_id,
                    ],
                    [
                        'qty_on_hand' => 0,
                        'qty_reserved' => 0,
                        'last_movement_at' => $transfer->transfer_date,
                    ]
                );

                if ((float) $stock->qty_on_hand < (float) $item->qty_sent) {
                    throw ValidationException::withMessages([
                        'items' => ["Stok bahan {$item->raw_material_id} di outlet sumber tidak mencukupi."],
                    ]);
                }
            }

            $effectiveSentAt = $sentAt ? now()->parse($sentAt) : now();

            $this->stockMovementService->create([
                'outlet_id' => $transfer->source_outlet_id,
                'movement_type' => 'transfer_out',
                'reference_type' => StockTransfer::class,
                'reference_id' => $transfer->id,
                'movement_date' => $effectiveSentAt,
                'notes' => $transfer->notes,
                'created_by' => $transfer->created_by,
                'items' => $transfer->items->map(function ($item) {
                    return [
                        'raw_material_id' => $item->raw_material_id,
                        'qty_in' => 0,
                        'qty_out' => $item->qty_sent,
                        'unit_cost' => 0,
                        'notes' => $item->notes,
                    ];
                })->all(),
            ]);

            $transfer->update([
                'status' => 'sent',
                'sent_at' => $effectiveSentAt,
            ]);

            return $transfer->fresh()->load(['sourceOutlet', 'targetOutlet', 'creator', 'receiver', 'items.rawMaterial', 'items.unit']);
        });
    }

    public function receive(StockTransfer $transfer, array $payload, int $userId): StockTransfer
    {
        if ($transfer->status !== 'sent') {
            throw ValidationException::withMessages([
                'status' => ['Hanya stock transfer sent yang bisa diterima.'],
            ]);
        }

        return DB::transaction(function () use ($transfer, $payload, $userId) {
            $receivedMap = collect($payload['items'] ?? [])
                ->keyBy(fn (array $item) => (int) $item['raw_material_id']);

            foreach ($transfer->items as $item) {
                $qtyReceived = (float) ($receivedMap[$item->raw_material_id]['qty_received'] ?? $item->qty_sent);

                if ($qtyReceived <= 0) {
                    throw ValidationException::withMessages([
                        'items' => ["qty_received untuk raw material {$item->raw_material_id} harus lebih dari 0."],
                    ]);
                }

                if ($qtyReceived > (float) $item->qty_sent) {
                    throw ValidationException::withMessages([
                        'items' => ["qty_received untuk raw material {$item->raw_material_id} tidak boleh melebihi qty_sent."],
                    ]);
                }

                $item->update([
                    'qty_received' => $qtyReceived,
                ]);
            }

            $effectiveReceivedAt = !empty($payload['received_at']) ? now()->parse($payload['received_at']) : now();

            $this->stockMovementService->create([
                'outlet_id' => $transfer->target_outlet_id,
                'movement_type' => 'transfer_in',
                'reference_type' => StockTransfer::class,
                'reference_id' => $transfer->id,
                'movement_date' => $effectiveReceivedAt,
                'notes' => $transfer->notes,
                'created_by' => $userId,
                'items' => $transfer->items->map(function ($item) {
                    return [
                        'raw_material_id' => $item->raw_material_id,
                        'qty_in' => $item->qty_received ?? $item->qty_sent,
                        'qty_out' => 0,
                        'unit_cost' => 0,
                        'notes' => $item->notes,
                    ];
                })->all(),
            ]);

            $transfer->update([
                'status' => 'received',
                'received_by' => $userId,
                'received_at' => $effectiveReceivedAt,
            ]);

            return $transfer->fresh()->load(['sourceOutlet', 'targetOutlet', 'creator', 'receiver', 'items.rawMaterial', 'items.unit']);
        });
    }

    public function cancel(StockTransfer $transfer): StockTransfer
    {
        if ($transfer->status === 'received') {
            throw ValidationException::withMessages([
                'status' => ['Stock transfer yang sudah received tidak bisa dibatalkan.'],
            ]);
        }

        $transfer->update([
            'status' => 'cancelled',
        ]);

        return $transfer->fresh()->load(['sourceOutlet', 'targetOutlet', 'creator', 'receiver', 'items.rawMaterial', 'items.unit']);
    }

    private function generateTransferNumber(int $outletId): string
    {
        $count = StockTransfer::query()
            ->where('source_outlet_id', $outletId)
            ->whereDate('created_at', now()->toDateString())
            ->count() + 1;

        return 'TRF-' . $outletId . '-' . now()->format('Ymd') . '-' . str_pad((string) $count, 4, '0', STR_PAD_LEFT);
    }
}

```
</details>

<a id="file-appservicesinventoryunitconversionservicephp"></a>
### app\Services\Inventory\UnitConversionService.php
- SHA: `525119599429`  
- Ukuran: 415 B  
- Namespace: `App\Services\Inventory`

**Class `UnitConversionService`**

Metode Publik:
- **create**(array $payload) : *UnitConversion*
- **update**(UnitConversion $unitConversion, array $payload) : *UnitConversion*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Inventory;

use App\Models\UnitConversion;

class UnitConversionService
{
    public function create(array $payload): UnitConversion
    {
        return UnitConversion::create($payload);
    }

    public function update(UnitConversion $unitConversion, array $payload): UnitConversion
    {
        $unitConversion->update($payload);

        return $unitConversion->fresh();
    }
}

```
</details>

<a id="file-appservicesinventoryunitservicephp"></a>
### app\Services\Inventory\UnitService.php
- SHA: `109d5f2b5a3f`  
- Ukuran: 325 B  
- Namespace: `App\Services\Inventory`

**Class `UnitService`**

Metode Publik:
- **create**(array $payload) : *Unit*
- **update**(Unit $unit, array $payload) : *Unit*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Inventory;

use App\Models\Unit;

class UnitService
{
    public function create(array $payload): Unit
    {
        return Unit::create($payload);
    }

    public function update(Unit $unit, array $payload): Unit
    {
        $unit->update($payload);

        return $unit->fresh();
    }
}

```
</details>

<a id="file-appserviceskitchenkitchenticketservicephp"></a>
### app\Services\Kitchen\KitchenTicketService.php
- SHA: `cb82accb6aa3`  
- Ukuran: 10 KB  
- Namespace: `App\Services\Kitchen`

**Class `KitchenTicketService`**

Metode Publik:
- **createFromOrderId**(int $orderId) : *KitchenTicket*
- **createFromOrder**(Order $order) : *KitchenTicket*
- **syncFromOrder**(Order $order) : *?KitchenTicket*
- **syncCancelledFromOrder**(Order $order) : *?KitchenTicket*
- **markPrinted**(KitchenTicket $ticket, ?string $printedAt = null) : *KitchenTicket*
- **startPreparing**(KitchenTicket $ticket, int $userId, ?string $preparedAt = null, ?string $notes = null) : *KitchenTicket*
- **markReady**(KitchenTicket $ticket, int $userId, ?string $readyAt = null, ?string $notes = null) : *KitchenTicket*
- **serve**(KitchenTicket $ticket, int $userId, ?string $completedAt = null, ?string $notes = null) : *KitchenTicket*
- **cancel**(KitchenTicket $ticket, int $userId, ?string $cancelledAt = null, ?string $notes = null) : *KitchenTicket*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Kitchen;

use App\Models\KitchenTicket;
use App\Models\Order;
use App\Models\OrderStatusHistory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class KitchenTicketService
{
    public function createFromOrderId(int $orderId): KitchenTicket
    {
        $order = Order::query()
            ->with($this->orderRelations())
            ->findOrFail($orderId);

        return $this->createFromOrder($order);
    }

    public function createFromOrder(Order $order): KitchenTicket
    {
        return DB::transaction(function () use ($order) {
            $order->loadMissing($this->orderRelations());

            if (in_array($order->order_status, ['draft', 'pending', 'cancelled'], true)) {
                throw ValidationException::withMessages([
                    'order_id' => ['Order belum siap dibuatkan kitchen ticket.'],
                ]);
            }

            $existing = KitchenTicket::query()
                ->where('order_id', $order->id)
                ->first();

            if ($existing) {
                return $existing->load($this->ticketRelations());
            }

            $ticket = KitchenTicket::create([
                'order_id' => $order->id,
                'ticket_number' => $this->generateTicketNumber((int) $order->outlet_id),
                'status' => $this->mapOrderStatusToTicketStatus($order->order_status),
                'prepared_at' => $order->order_status === 'preparing' ? now() : null,
                'ready_at' => $order->order_status === 'ready' ? now() : null,
            ]);

            foreach ($order->items as $item) {
                $ticket->items()->create([
                    'order_item_id' => $item->id,
                    'item_name_snapshot' => $item->product_name_snapshot,
                    'qty' => $item->qty,
                    'notes' => $item->notes,
                ]);
            }

            return $ticket->fresh()->load($this->ticketRelations());
        });
    }

    public function syncFromOrder(Order $order): ?KitchenTicket
    {
        $order->loadMissing($this->orderRelations());

        if (in_array($order->order_status, ['draft', 'pending'], true)) {
            return null;
        }

        if ($order->order_status === 'cancelled') {
            return $this->syncCancelledFromOrder($order);
        }

        $ticket = KitchenTicket::query()->where('order_id', $order->id)->first();

        if (!$ticket) {
            return $this->createFromOrder($order);
        }

        $ticketStatus = $this->mapOrderStatusToTicketStatus($order->order_status);

        $payload = [
            'status' => $ticketStatus,
        ];

        if ($ticketStatus === 'preparing' && !$ticket->prepared_at) {
            $payload['prepared_at'] = now();
        }

        if ($ticketStatus === 'ready' && !$ticket->ready_at) {
            $payload['ready_at'] = now();
        }

        $ticket->update($payload);

        return $ticket->fresh()->load($this->ticketRelations());
    }

    public function syncCancelledFromOrder(Order $order): ?KitchenTicket
    {
        $ticket = KitchenTicket::query()->where('order_id', $order->id)->first();

        if (!$ticket) {
            return null;
        }

        $ticket->update([
            'status' => 'cancelled',
        ]);

        return $ticket->fresh()->load($this->ticketRelations());
    }

    public function markPrinted(KitchenTicket $ticket, ?string $printedAt = null): KitchenTicket
    {
        $ticket->update([
            'printed_at' => $printedAt ?: now(),
        ]);

        return $ticket->fresh()->load($this->ticketRelations());
    }

    public function startPreparing(KitchenTicket $ticket, int $userId, ?string $preparedAt = null, ?string $notes = null): KitchenTicket
    {
        return DB::transaction(function () use ($ticket, $userId, $preparedAt, $notes) {
            if (in_array($ticket->status, ['served', 'cancelled'], true)) {
                throw ValidationException::withMessages([
                    'status' => ['Kitchen ticket yang sudah served atau cancelled tidak bisa diproses lagi.'],
                ]);
            }

            $ticket->update([
                'status' => 'preparing',
                'prepared_at' => $preparedAt ?: now(),
            ]);

            $this->syncOrderStatus(
                order: $ticket->order()->firstOrFail(),
                status: 'preparing',
                userId: $userId,
                notes: $notes ?: 'Pesanan mulai diproses dapur.',
                completedAt: null,
                cancelledAt: null,
            );

            return $ticket->fresh()->load($this->ticketRelations());
        });
    }

    public function markReady(KitchenTicket $ticket, int $userId, ?string $readyAt = null, ?string $notes = null): KitchenTicket
    {
        return DB::transaction(function () use ($ticket, $userId, $readyAt, $notes) {
            if (in_array($ticket->status, ['served', 'cancelled'], true)) {
                throw ValidationException::withMessages([
                    'status' => ['Kitchen ticket yang sudah served atau cancelled tidak bisa diubah ke ready.'],
                ]);
            }

            $ticket->update([
                'status' => 'ready',
                'ready_at' => $readyAt ?: now(),
                'prepared_at' => $ticket->prepared_at ?: now(),
            ]);

            $this->syncOrderStatus(
                order: $ticket->order()->firstOrFail(),
                status: 'ready',
                userId: $userId,
                notes: $notes ?: 'Pesanan sudah siap di-pickup / disajikan.',
                completedAt: null,
                cancelledAt: null,
            );

            return $ticket->fresh()->load($this->ticketRelations());
        });
    }

    public function serve(KitchenTicket $ticket, int $userId, ?string $completedAt = null, ?string $notes = null): KitchenTicket
    {
        return DB::transaction(function () use ($ticket, $userId, $completedAt, $notes) {
            if ($ticket->status === 'cancelled') {
                throw ValidationException::withMessages([
                    'status' => ['Kitchen ticket yang cancelled tidak bisa di-serve.'],
                ]);
            }

            $ticket->update([
                'status' => 'served',
                'prepared_at' => $ticket->prepared_at ?: now(),
                'ready_at' => $ticket->ready_at ?: now(),
            ]);

            $this->syncOrderStatus(
                order: $ticket->order()->firstOrFail(),
                status: 'completed',
                userId: $userId,
                notes: $notes ?: 'Pesanan selesai dari dapur.',
                completedAt: $completedAt ?: now(),
                cancelledAt: null,
            );

            return $ticket->fresh()->load($this->ticketRelations());
        });
    }

    public function cancel(KitchenTicket $ticket, int $userId, ?string $cancelledAt = null, ?string $notes = null): KitchenTicket
    {
        return DB::transaction(function () use ($ticket, $userId, $cancelledAt, $notes) {
            if ($ticket->status === 'served') {
                throw ValidationException::withMessages([
                    'status' => ['Kitchen ticket yang sudah served tidak bisa dibatalkan.'],
                ]);
            }

            $ticket->update([
                'status' => 'cancelled',
            ]);

            $this->syncOrderStatus(
                order: $ticket->order()->firstOrFail(),
                status: 'cancelled',
                userId: $userId,
                notes: $notes ?: 'Pesanan dibatalkan dari proses dapur.',
                completedAt: null,
                cancelledAt: $cancelledAt ?: now(),
            );

            return $ticket->fresh()->load($this->ticketRelations());
        });
    }

    private function syncOrderStatus(
        Order $order,
        string $status,
        int $userId,
        ?string $notes = null,
        ?string $completedAt = null,
        ?string $cancelledAt = null,
    ): void {
        $updatePayload = [
            'order_status' => $status,
        ];

        if ($status === 'completed') {
            $updatePayload['completed_at'] = $completedAt ?: now();
        }

        if ($status === 'cancelled') {
            $updatePayload['cancelled_at'] = $cancelledAt ?: now();
            $updatePayload['cancelled_by'] = $userId;
            $updatePayload['payment_status'] = $order->payment_status === 'paid' ? $order->payment_status : 'cancelled';
        }

        $order->update($updatePayload);

        $latestHistory = $order->statusHistories()->latest('id')->first();

        if (!$latestHistory || $latestHistory->status !== $status) {
            OrderStatusHistory::query()->create([
                'order_id' => $order->id,
                'status' => $status,
                'changed_by' => $userId,
                'notes' => $notes,
                'changed_at' => now(),
            ]);
        }
    }

    private function generateTicketNumber(int $outletId): string
    {
        do {
            $ticketNumber = sprintf(
                'KDS-%d-%s-%s',
                $outletId,
                now()->format('Ymd'),
                strtoupper(Str::padLeft((string) random_int(1, 9999), 4, '0'))
            );

            $exists = KitchenTicket::query()->where('ticket_number', $ticketNumber)->exists();
        } while ($exists);

        return $ticketNumber;
    }

    private function mapOrderStatusToTicketStatus(string $orderStatus): string
    {
        return match ($orderStatus) {
            'preparing' => 'preparing',
            'ready' => 'ready',
            'completed' => 'served',
            'cancelled' => 'cancelled',
            default => 'pending',
        };
    }

    private function ticketRelations(): array
    {
        return [
            'order.outlet',
            'order.customer',
            'items.orderItem.variants',
            'items.orderItem.modifiers',
        ];
    }

    private function orderRelations(): array
    {
        return [
            'outlet',
            'customer',
            'items.variants',
            'items.modifiers',
            'statusHistories',
        ];
    }
}

```
</details>

<a id="file-appservicesoutletoutletservicephp"></a>
### app\Services\Outlet\OutletService.php
- SHA: `7b229eac14f4`  
- Ukuran: 933 B  
- Namespace: `App\Services\Outlet`

**Class `OutletService`**

Metode Publik:
- **create**(array $payload) : *Outlet*
- **update**(Outlet $outlet, array $payload) : *Outlet*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Outlet;

use App\Models\Outlet;
use Illuminate\Support\Facades\DB;

class OutletService
{
    public function create(array $payload): Outlet
    {
        return DB::transaction(function () use ($payload) {
            $outlet = Outlet::create($payload);

            $outlet->setting()->create([
                'tax_percent' => 0,
                'service_charge_percent' => 0,
                'currency_code' => 'IDR',
                'timezone' => 'Asia/Jakarta',
                'allow_negative_stock' => false,
                'low_stock_notification_enabled' => true,
            ]);

            return $outlet->load('setting');
        });
    }

    public function update(Outlet $outlet, array $payload): Outlet
    {
        return DB::transaction(function () use ($outlet, $payload) {
            $outlet->update($payload);

            return $outlet->load('setting');
        });
    }
}

```
</details>

<a id="file-appservicespromotionpromotionservicephp"></a>
### app\Services\Promotion\PromotionService.php
- SHA: `627373daf397`  
- Ukuran: 3 KB  
- Namespace: `App\Services\Promotion`

**Class `PromotionService`**

Metode Publik:
- **create**(array $payload) : *Promotion*
- **update**(Promotion $promotion, array $payload) : *Promotion*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Promotion;

use App\Models\Promotion;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class PromotionService
{
    public function create(array $payload): Promotion
    {
        return DB::transaction(function () use ($payload) {
            $rules = $payload['rules'] ?? [];
            unset($payload['rules']);

            $this->validateBusinessRules($payload);

            $promotion = Promotion::create([
                'name' => $payload['name'],
                'description' => $payload['description'] ?? null,
                'promotion_type' => $payload['promotion_type'],
                'starts_at' => $payload['starts_at'] ?? null,
                'ends_at' => $payload['ends_at'] ?? null,
                'priority' => $payload['priority'] ?? 0,
                'is_active' => $payload['is_active'] ?? true,
            ]);

            $this->syncRules($promotion, $rules);

            return $promotion->fresh()->load('rules');
        });
    }

    public function update(Promotion $promotion, array $payload): Promotion
    {
        return DB::transaction(function () use ($promotion, $payload) {
            $hasRules = array_key_exists('rules', $payload);
            $rules = $payload['rules'] ?? [];
            unset($payload['rules']);

            $merged = array_merge($promotion->toArray(), $payload);
            $this->validateBusinessRules($merged);

            $promotion->update($payload);

            if ($hasRules) {
                $this->syncRules($promotion, $rules);
            }

            return $promotion->fresh()->load('rules');
        });
    }

    private function syncRules(Promotion $promotion, array $rules): void
    {
        $promotion->rules()->delete();

        foreach ($rules as $rule) {
            $promotion->rules()->create([
                'rule_type' => $rule['rule_type'],
                'operator' => $rule['operator'] ?? null,
                'value' => is_array($rule['value'] ?? null)
                    ? json_encode($rule['value'], JSON_UNESCAPED_UNICODE)
                    : ($rule['value'] ?? null),
            ]);
        }
    }

    private function validateBusinessRules(array $payload): void
    {
        $startsAt = $payload['starts_at'] ?? null;
        $endsAt = $payload['ends_at'] ?? null;

        if ($startsAt && $endsAt && strtotime((string) $endsAt) < strtotime((string) $startsAt)) {
            throw ValidationException::withMessages([
                'ends_at' => ['ends_at tidak boleh lebih kecil dari starts_at.'],
            ]);
        }
    }
}
```
</details>

<a id="file-appservicespurchasinggoodsreceiptservicephp"></a>
### app\Services\Purchasing\GoodsReceiptService.php
- SHA: `0869e6f400b1`  
- Ukuran: 11 KB  
- Namespace: `App\Services\Purchasing`

**Class `GoodsReceiptService`**

Metode Publik:
- **create**(array $payload, ?int $userId = null) : *GoodsReceipt*
- **update**(GoodsReceipt $goodsReceipt, array $payload) : *GoodsReceipt*
- **post**(GoodsReceipt $goodsReceipt, int $userId) : *GoodsReceipt*
- **cancel**(GoodsReceipt $goodsReceipt) : *GoodsReceipt*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Purchasing;

use App\Models\GoodsReceipt;
use App\Models\OutletMaterialStock;
use App\Models\PurchaseOrder;
use App\Models\RawMaterial;
use App\Models\StockMovement;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class GoodsReceiptService
{
    public function create(array $payload, ?int $userId = null): GoodsReceipt
    {
        return DB::transaction(function () use ($payload, $userId) {
            $items = $payload['items'] ?? [];
            unset($payload['items']);

            $purchaseOrder = PurchaseOrder::query()
                ->with(['items', 'goodsReceipts.items'])
                ->findOrFail($payload['purchase_order_id']);

            $this->ensureReceiptCanBeCreatedForPurchaseOrder($purchaseOrder, (int) $payload['outlet_id']);

            if (empty($payload['receipt_number'])) {
                $payload['receipt_number'] = $this->generateReceiptNumber((int) $payload['outlet_id']);
            }

            $payload['status'] = $payload['status'] ?? 'draft';
            $payload['received_by'] = $payload['received_by'] ?? $userId;

            $normalizedItems = $this->prepareReceiptItems($purchaseOrder, $items, null);

            $goodsReceipt = GoodsReceipt::create($payload);

            foreach ($normalizedItems as $item) {
                $goodsReceipt->items()->create($item);
            }

            return $goodsReceipt->load([
                'purchaseOrder.supplier',
                'outlet',
                'receiver',
                'items.rawMaterial',
                'items.unit',
            ]);
        });
    }

    public function update(GoodsReceipt $goodsReceipt, array $payload): GoodsReceipt
    {
        return DB::transaction(function () use ($goodsReceipt, $payload) {
            if ($goodsReceipt->status !== 'draft') {
                throw ValidationException::withMessages([
                    'status' => ['Hanya goods receipt draft yang bisa diubah.'],
                ]);
            }

            $items = $payload['items'] ?? null;
            unset($payload['items']);

            if (array_key_exists('purchase_order_id', $payload) || array_key_exists('outlet_id', $payload)) {
                $targetPurchaseOrderId = (int) ($payload['purchase_order_id'] ?? $goodsReceipt->purchase_order_id);
                $targetOutletId = (int) ($payload['outlet_id'] ?? $goodsReceipt->outlet_id);

                $purchaseOrder = PurchaseOrder::query()
                    ->with(['items', 'goodsReceipts.items'])
                    ->findOrFail($targetPurchaseOrderId);

                $this->ensureReceiptCanBeCreatedForPurchaseOrder($purchaseOrder, $targetOutletId);
            } else {
                $purchaseOrder = $goodsReceipt->purchaseOrder()->with(['items', 'goodsReceipts.items'])->firstOrFail();
            }

            if (empty($payload['receipt_number'] ?? null)) {
                unset($payload['receipt_number']);
            }

            $goodsReceipt->update($payload);

            if (is_array($items)) {
                $normalizedItems = $this->prepareReceiptItems($purchaseOrder, $items, $goodsReceipt);

                $goodsReceipt->items()->delete();

                foreach ($normalizedItems as $item) {
                    $goodsReceipt->items()->create($item);
                }
            }

            return $goodsReceipt->fresh()->load([
                'purchaseOrder.supplier',
                'outlet',
                'receiver',
                'items.rawMaterial',
                'items.unit',
            ]);
        });
    }

    public function post(GoodsReceipt $goodsReceipt, int $userId): GoodsReceipt
    {
        return DB::transaction(function () use ($goodsReceipt, $userId) {
            if ($goodsReceipt->status !== 'draft') {
                throw ValidationException::withMessages([
                    'status' => ['Hanya goods receipt draft yang bisa di-post.'],
                ]);
            }

            $goodsReceipt->loadMissing([
                'purchaseOrder.items',
                'purchaseOrder.goodsReceipts.items',
                'items.rawMaterial',
                'items.unit',
            ]);

            $this->prepareReceiptItems($goodsReceipt->purchaseOrder, $goodsReceipt->items->toArray(), $goodsReceipt);

            $movement = StockMovement::create([
                'outlet_id' => $goodsReceipt->outlet_id,
                'movement_type' => 'purchase',
                'reference_type' => GoodsReceipt::class,
                'reference_id' => $goodsReceipt->id,
                'movement_date' => $goodsReceipt->received_date,
                'notes' => $goodsReceipt->notes,
                'created_by' => $userId,
            ]);

            foreach ($goodsReceipt->items as $item) {
                $stock = OutletMaterialStock::query()->firstOrCreate(
                    [
                        'outlet_id' => $goodsReceipt->outlet_id,
                        'raw_material_id' => $item->raw_material_id,
                    ],
                    [
                        'qty_on_hand' => 0,
                        'qty_reserved' => 0,
                        'last_movement_at' => null,
                    ]
                );

                $stock->update([
                    'qty_on_hand' => (float) $stock->qty_on_hand + (float) $item->qty_received,
                    'last_movement_at' => $goodsReceipt->received_date,
                ]);

                RawMaterial::query()
                    ->whereKey($item->raw_material_id)
                    ->update([
                        'last_purchase_price' => $item->unit_cost,
                    ]);

                $movement->items()->create([
                    'raw_material_id' => $item->raw_material_id,
                    'qty_in' => $item->qty_received,
                    'qty_out' => 0,
                    'unit_cost' => $item->unit_cost,
                    'notes' => $item->notes,
                ]);
            }

            $goodsReceipt->update([
                'status' => 'posted',
                'received_by' => $goodsReceipt->received_by ?: $userId,
            ]);

            $this->refreshPurchaseOrderStatus($goodsReceipt->purchaseOrder()->with(['items', 'goodsReceipts.items'])->firstOrFail());

            return $goodsReceipt->fresh()->load([
                'purchaseOrder.supplier',
                'outlet',
                'receiver',
                'items.rawMaterial',
                'items.unit',
            ]);
        });
    }

    public function cancel(GoodsReceipt $goodsReceipt): GoodsReceipt
    {
        if ($goodsReceipt->status === 'posted') {
            throw ValidationException::withMessages([
                'status' => ['Goods receipt yang sudah dipost tidak bisa dibatalkan lewat endpoint ini.'],
            ]);
        }

        $goodsReceipt->update([
            'status' => 'cancelled',
        ]);

        $this->refreshPurchaseOrderStatus($goodsReceipt->purchaseOrder()->with(['items', 'goodsReceipts.items'])->firstOrFail());

        return $goodsReceipt->fresh()->load([
            'purchaseOrder.supplier',
            'outlet',
            'receiver',
            'items.rawMaterial',
            'items.unit',
        ]);
    }

    private function ensureReceiptCanBeCreatedForPurchaseOrder(PurchaseOrder $purchaseOrder, int $outletId): void
    {
        if (!in_array($purchaseOrder->status, ['approved', 'partial_received'], true)) {
            throw ValidationException::withMessages([
                'purchase_order_id' => ['Goods receipt hanya bisa dibuat dari purchase order yang approved atau partial_received.'],
            ]);
        }

        if ((int) $purchaseOrder->outlet_id !== $outletId) {
            throw ValidationException::withMessages([
                'outlet_id' => ['Outlet goods receipt harus sama dengan outlet purchase order.'],
            ]);
        }
    }

    private function prepareReceiptItems(PurchaseOrder $purchaseOrder, array $items, ?GoodsReceipt $currentReceipt = null): array
    {
        $poItemsByMaterial = $purchaseOrder->items->keyBy('raw_material_id');
        $alreadyReceivedMap = $this->getAlreadyReceivedMap($purchaseOrder, $currentReceipt);

        $normalizedItems = [];

        foreach ($items as $item) {
            $rawMaterialId = (int) $item['raw_material_id'];

            if (!isset($poItemsByMaterial[$rawMaterialId])) {
                throw ValidationException::withMessages([
                    'items' => ["Raw material ID {$rawMaterialId} tidak ada di purchase order."],
                ]);
            }

            $poItem = $poItemsByMaterial[$rawMaterialId];
            $newQty = (float) $item['qty_received'];
            $alreadyReceived = (float) ($alreadyReceivedMap[$rawMaterialId] ?? 0);
            $allowedMax = (float) $poItem->qty_ordered - $alreadyReceived;

            if ($newQty > $allowedMax) {
                throw ValidationException::withMessages([
                    'items' => ["Qty received untuk raw material ID {$rawMaterialId} melebihi sisa qty order."],
                ]);
            }

            $lineTotal = (float) $item['unit_cost'] * $newQty;

            $normalizedItems[] = [
                'raw_material_id' => $rawMaterialId,
                'unit_id' => $item['unit_id'],
                'qty_received' => $newQty,
                'unit_cost' => $item['unit_cost'],
                'line_total' => $lineTotal,
                'expired_at' => $item['expired_at'] ?? null,
                'notes' => $item['notes'] ?? null,
            ];
        }

        return $normalizedItems;
    }

    private function getAlreadyReceivedMap(PurchaseOrder $purchaseOrder, ?GoodsReceipt $currentReceipt = null): array
    {
        $map = [];

        $receipts = $purchaseOrder->goodsReceipts
            ->where('status', 'posted')
            ->when($currentReceipt !== null, fn (Collection $collection) => $collection->where('id', '!=', $currentReceipt->id));

        foreach ($receipts as $receipt) {
            foreach ($receipt->items as $item) {
                $map[$item->raw_material_id] = (float) ($map[$item->raw_material_id] ?? 0) + (float) $item->qty_received;
            }
        }

        return $map;
    }

    private function refreshPurchaseOrderStatus(PurchaseOrder $purchaseOrder): void
    {
        if ($purchaseOrder->status === 'cancelled') {
            return;
        }

        $receivedMap = $this->getAlreadyReceivedMap($purchaseOrder, null);

        $allReceived = true;
        $hasAnyReceived = false;

        foreach ($purchaseOrder->items as $item) {
            $receivedQty = (float) ($receivedMap[$item->raw_material_id] ?? 0);

            if ($receivedQty > 0) {
                $hasAnyReceived = true;
            }

            if ($receivedQty < (float) $item->qty_ordered) {
                $allReceived = false;
            }
        }

        $newStatus = 'approved';

        if ($allReceived && $hasAnyReceived) {
            $newStatus = 'received';
        } elseif ($hasAnyReceived) {
            $newStatus = 'partial_received';
        }

        $purchaseOrder->update([
            'status' => $newStatus,
        ]);
    }

    private function generateReceiptNumber(int $outletId): string
    {
        $date = now()->format('Ymd');
        $latestId = (GoodsReceipt::max('id') ?? 0) + 1;

        return sprintf('GR-%d-%s-%04d', $outletId, $date, $latestId);
    }
}

```
</details>

<a id="file-appservicespurchasingpurchaseorderservicephp"></a>
### app\Services\Purchasing\PurchaseOrderService.php
- SHA: `ecc77e2d67bd`  
- Ukuran: 6 KB  
- Namespace: `App\Services\Purchasing`

**Class `PurchaseOrderService`**

Metode Publik:
- **create**(array $payload, ?int $userId = null) : *PurchaseOrder*
- **update**(PurchaseOrder $purchaseOrder, array $payload) : *PurchaseOrder*
- **approve**(PurchaseOrder $purchaseOrder, int $userId) : *PurchaseOrder*
- **cancel**(PurchaseOrder $purchaseOrder) : *PurchaseOrder*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Purchasing;

use App\Models\PurchaseOrder;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class PurchaseOrderService
{
    public function create(array $payload, ?int $userId = null): PurchaseOrder
    {
        return DB::transaction(function () use ($payload, $userId) {
            $items = $payload['items'] ?? [];
            unset($payload['items']);

            $payload['status'] = $payload['status'] ?? 'draft';
            $payload['created_by'] = $userId;

            if (empty($payload['po_number'])) {
                $payload['po_number'] = $this->generatePoNumber($payload['outlet_id']);
            }

            [$subtotal, $discountAmount, $taxAmount, $totalAmount, $normalizedItems] = $this->prepareItemsAndTotals(
                items: $items,
                discountAmount: (float) ($payload['discount_amount'] ?? 0),
                taxAmount: (float) ($payload['tax_amount'] ?? 0),
            );

            $payload['subtotal'] = $subtotal;
            $payload['discount_amount'] = $discountAmount;
            $payload['tax_amount'] = $taxAmount;
            $payload['total_amount'] = $totalAmount;

            $purchaseOrder = PurchaseOrder::create($payload);

            foreach ($normalizedItems as $item) {
                $purchaseOrder->items()->create($item);
            }

            if ($purchaseOrder->status === 'approved') {
                $purchaseOrder->update([
                    'approved_by' => $userId,
                    'approved_at' => now(),
                ]);
            }

            return $purchaseOrder->load([
                'outlet',
                'supplier',
                'approver',
                'creator',
                'items.rawMaterial',
                'items.unit',
            ]);
        });
    }

    public function update(PurchaseOrder $purchaseOrder, array $payload): PurchaseOrder
    {
        return DB::transaction(function () use ($purchaseOrder, $payload) {
            if (in_array($purchaseOrder->status, ['partial_received', 'received', 'cancelled'], true)) {
                throw ValidationException::withMessages([
                    'status' => ['Purchase order dengan status ini tidak bisa diubah.'],
                ]);
            }

            $items = $payload['items'] ?? null;
            unset($payload['items']);

            if (empty($payload['po_number'] ?? null)) {
                unset($payload['po_number']);
            }

            if (is_array($items)) {
                [$subtotal, $discountAmount, $taxAmount, $totalAmount, $normalizedItems] = $this->prepareItemsAndTotals(
                    items: $items,
                    discountAmount: (float) ($payload['discount_amount'] ?? $purchaseOrder->discount_amount),
                    taxAmount: (float) ($payload['tax_amount'] ?? $purchaseOrder->tax_amount),
                );

                $payload['subtotal'] = $subtotal;
                $payload['discount_amount'] = $discountAmount;
                $payload['tax_amount'] = $taxAmount;
                $payload['total_amount'] = $totalAmount;
            }

            $purchaseOrder->update($payload);

            if (is_array($items)) {
                $purchaseOrder->items()->delete();

                foreach ($normalizedItems as $item) {
                    $purchaseOrder->items()->create($item);
                }
            }

            return $purchaseOrder->fresh()->load([
                'outlet',
                'supplier',
                'approver',
                'creator',
                'items.rawMaterial',
                'items.unit',
            ]);
        });
    }

    public function approve(PurchaseOrder $purchaseOrder, int $userId): PurchaseOrder
    {
        if ($purchaseOrder->status !== 'draft') {
            throw ValidationException::withMessages([
                'status' => ['Hanya purchase order draft yang bisa di-approve.'],
            ]);
        }

        $purchaseOrder->update([
            'status' => 'approved',
            'approved_by' => $userId,
            'approved_at' => now(),
        ]);

        return $purchaseOrder->fresh()->load([
            'outlet',
            'supplier',
            'approver',
            'creator',
            'items.rawMaterial',
            'items.unit',
        ]);
    }

    public function cancel(PurchaseOrder $purchaseOrder): PurchaseOrder
    {
        if (in_array($purchaseOrder->status, ['received', 'cancelled'], true)) {
            throw ValidationException::withMessages([
                'status' => ['Purchase order dengan status ini tidak bisa dibatalkan.'],
            ]);
        }

        $purchaseOrder->update([
            'status' => 'cancelled',
        ]);

        return $purchaseOrder->fresh()->load([
            'outlet',
            'supplier',
            'approver',
            'creator',
            'items.rawMaterial',
            'items.unit',
        ]);
    }

    private function prepareItemsAndTotals(array $items, float $discountAmount, float $taxAmount): array
    {
        $normalizedItems = [];
        $subtotal = 0;

        foreach ($items as $item) {
            $lineTotal = ((float) $item['qty_ordered'] * (float) $item['unit_price']) - (float) ($item['discount_amount'] ?? 0);

            $normalizedItems[] = [
                'raw_material_id' => $item['raw_material_id'],
                'unit_id' => $item['unit_id'],
                'qty_ordered' => $item['qty_ordered'],
                'unit_price' => $item['unit_price'],
                'discount_amount' => $item['discount_amount'] ?? 0,
                'line_total' => $lineTotal,
                'notes' => $item['notes'] ?? null,
            ];

            $subtotal += $lineTotal;
        }

        $totalAmount = $subtotal - $discountAmount + $taxAmount;

        return [$subtotal, $discountAmount, $taxAmount, $totalAmount, $normalizedItems];
    }

    private function generatePoNumber(int $outletId): string
    {
        $date = now()->format('Ymd');
        $latestId = (PurchaseOrder::max('id') ?? 0) + 1;

        return sprintf('PO-%d-%s-%04d', $outletId, $date, $latestId);
    }
}

```
</details>

<a id="file-appservicespurchasingsupplierservicephp"></a>
### app\Services\Purchasing\SupplierService.php
- SHA: `887277ef4226`  
- Ukuran: 362 B  
- Namespace: `App\Services\Purchasing`

**Class `SupplierService`**

Metode Publik:
- **create**(array $payload) : *Supplier*
- **update**(Supplier $supplier, array $payload) : *Supplier*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Purchasing;

use App\Models\Supplier;

class SupplierService
{
    public function create(array $payload): Supplier
    {
        return Supplier::create($payload);
    }

    public function update(Supplier $supplier, array $payload): Supplier
    {
        $supplier->update($payload);

        return $supplier->fresh();
    }
}

```
</details>

<a id="file-appservicesreportreportingservicephp"></a>
### app\Services\Report\ReportingService.php
- SHA: `067d28bc1798`  
- Ukuran: 28 KB  
- Namespace: `App\Services\Report`

**Class `ReportingService`**

Metode Publik:
- **salesSummary**(array $filters) : *array*
- **salesTrend**(array $filters) : *Collection*
- **salesByOutlet**(array $filters) : *Collection*
- **salesByCashier**(array $filters) : *Collection*
- **topProducts**(array $filters) : *Collection*
- **paymentSummary**(array $filters) : *Collection*
- **promoUsage**(array $filters) : *array*
- **voidRefund**(array $filters) : *array*
- **lowStocks**(array $filters) : *Collection*
- **purchaseMaterials**(array $filters) : *Collection*
- **expenses**(array $filters) : *Collection*
- **shiftSummary**(array $filters) : *Collection*
- **orderDetails**(array $filters) : *LengthAwarePaginator*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Report;

use Carbon\Carbon;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;

class ReportingService
{
    public function salesSummary(array $filters): array
    {
        $query = DB::table('orders')
            ->leftJoin('payments', function ($join) {
                $join->on('payments.order_id', '=', 'orders.id')
                    ->where('payments.status', '=', 'paid');
            });

        $this->applyOrderFilters($query, $filters);

        $row = $query
            ->selectRaw('COUNT(DISTINCT orders.id) as total_orders')
            ->selectRaw('COALESCE(SUM(DISTINCT orders.subtotal), 0) as subtotal')
            ->selectRaw('COALESCE(SUM(DISTINCT orders.discount_amount), 0) as discount_amount')
            ->selectRaw('COALESCE(SUM(DISTINCT orders.tax_amount), 0) as tax_amount')
            ->selectRaw('COALESCE(SUM(DISTINCT orders.service_charge_amount), 0) as service_charge_amount')
            ->selectRaw('COALESCE(SUM(DISTINCT orders.grand_total), 0) as grand_total')
            ->selectRaw('COALESCE(SUM(payments.amount), 0) as paid_total')
            ->selectRaw('COALESCE(AVG(orders.grand_total), 0) as average_order_value')
            ->first();

        return [
            'total_orders' => (int) ($row->total_orders ?? 0),
            'subtotal' => (float) ($row->subtotal ?? 0),
            'discount_amount' => (float) ($row->discount_amount ?? 0),
            'tax_amount' => (float) ($row->tax_amount ?? 0),
            'service_charge_amount' => (float) ($row->service_charge_amount ?? 0),
            'grand_total' => (float) ($row->grand_total ?? 0),
            'paid_total' => (float) ($row->paid_total ?? 0),
            'average_order_value' => (float) ($row->average_order_value ?? 0),
            'filters' => $this->normalizedFilters($filters),
        ];
    }

    public function salesTrend(array $filters): Collection
    {
        $groupBy = $filters['group_by'] ?? 'day';
        $dateExpression = $this->dateGroupExpression('orders.ordered_at', $groupBy);

        $query = DB::table('orders');

        $this->applyOrderFilters($query, $filters);

        return $query
            ->selectRaw("{$dateExpression} as period")
            ->selectRaw('COUNT(*) as total_orders')
            ->selectRaw('COALESCE(SUM(grand_total), 0) as grand_total')
            ->selectRaw('COALESCE(SUM(discount_amount), 0) as discount_amount')
            ->whereNotIn('orders.order_status', ['draft', 'cancelled'])
            ->groupBy('period')
            ->orderBy('period')
            ->get()
            ->map(fn ($row) => [
                'period' => $row->period,
                'total_orders' => (int) $row->total_orders,
                'grand_total' => (float) $row->grand_total,
                'discount_amount' => (float) $row->discount_amount,
            ]);
    }

    public function salesByOutlet(array $filters): Collection
    {
        $query = DB::table('orders')
            ->join('outlets', 'outlets.id', '=', 'orders.outlet_id');

        $this->applyOrderFilters($query, $filters);

        return $query
            ->selectRaw('outlets.id as outlet_id')
            ->selectRaw('outlets.code as outlet_code')
            ->selectRaw('outlets.name as outlet_name')
            ->selectRaw('COUNT(orders.id) as total_orders')
            ->selectRaw('COALESCE(SUM(orders.grand_total), 0) as grand_total')
            ->selectRaw('COALESCE(SUM(orders.discount_amount), 0) as discount_amount')
            ->whereNotIn('orders.order_status', ['draft', 'cancelled'])
            ->groupBy('outlets.id', 'outlets.code', 'outlets.name')
            ->orderByDesc('grand_total')
            ->get()
            ->map(fn ($row) => [
                'outlet_id' => (int) $row->outlet_id,
                'outlet_code' => $row->outlet_code,
                'outlet_name' => $row->outlet_name,
                'total_orders' => (int) $row->total_orders,
                'grand_total' => (float) $row->grand_total,
                'discount_amount' => (float) $row->discount_amount,
            ]);
    }

    public function salesByCashier(array $filters): Collection
    {
        $query = DB::table('orders')
            ->leftJoin('users', 'users.id', '=', 'orders.created_by')
            ->leftJoin('outlets', 'outlets.id', '=', 'orders.outlet_id');

        $this->applyOrderFilters($query, $filters);

        return $query
            ->selectRaw('users.id as cashier_id')
            ->selectRaw('users.name as cashier_name')
            ->selectRaw('outlets.id as outlet_id')
            ->selectRaw('outlets.name as outlet_name')
            ->selectRaw('COUNT(orders.id) as total_orders')
            ->selectRaw('COALESCE(SUM(orders.grand_total), 0) as grand_total')
            ->whereNotIn('orders.order_status', ['draft', 'cancelled'])
            ->when(!empty($filters['cashier_id']), fn ($query) => $query->where('orders.created_by', (int) $filters['cashier_id']))
            ->groupBy('users.id', 'users.name', 'outlets.id', 'outlets.name')
            ->orderByDesc('grand_total')
            ->get()
            ->map(fn ($row) => [
                'cashier_id' => $row->cashier_id ? (int) $row->cashier_id : null,
                'cashier_name' => $row->cashier_name ?? 'Tanpa Kasir',
                'outlet_id' => $row->outlet_id ? (int) $row->outlet_id : null,
                'outlet_name' => $row->outlet_name,
                'total_orders' => (int) $row->total_orders,
                'grand_total' => (float) $row->grand_total,
            ]);
    }

    public function topProducts(array $filters): Collection
    {
        $query = DB::table('order_items')
            ->join('orders', 'orders.id', '=', 'order_items.order_id')
            ->leftJoin('products', 'products.id', '=', 'order_items.product_id')
            ->leftJoin('outlets', 'outlets.id', '=', 'orders.outlet_id');

        $this->applyOrderFilters($query, $filters);

        return $query
            ->selectRaw('order_items.product_id')
            ->selectRaw('order_items.product_name_snapshot')
            ->selectRaw('order_items.sku_snapshot')
            ->selectRaw('COUNT(DISTINCT orders.id) as total_orders')
            ->selectRaw('COALESCE(SUM(order_items.qty), 0) as total_qty')
            ->selectRaw('COALESCE(SUM(order_items.line_total), 0) as total_sales')
            ->whereNotIn('orders.order_status', ['draft', 'cancelled'])
            ->when(!empty($filters['product_id']), fn ($query) => $query->where('order_items.product_id', (int) $filters['product_id']))
            ->groupBy('order_items.product_id', 'order_items.product_name_snapshot', 'order_items.sku_snapshot')
            ->orderByDesc('total_qty')
            ->limit((int) ($filters['limit'] ?? 10))
            ->get()
            ->map(fn ($row) => [
                'product_id' => $row->product_id ? (int) $row->product_id : null,
                'product_name' => $row->product_name_snapshot,
                'sku' => $row->sku_snapshot,
                'total_orders' => (int) $row->total_orders,
                'total_qty' => (float) $row->total_qty,
                'total_sales' => (float) $row->total_sales,
            ]);
    }

    public function paymentSummary(array $filters): Collection
    {
        $query = DB::table('payments')
            ->join('orders', 'orders.id', '=', 'payments.order_id')
            ->join('payment_methods', 'payment_methods.id', '=', 'payments.payment_method_id');

        $this->applyOrderFilters($query, $filters);

        return $query
            ->selectRaw('payment_methods.id as payment_method_id')
            ->selectRaw('payment_methods.code as payment_method_code')
            ->selectRaw('payment_methods.name as payment_method_name')
            ->selectRaw('payment_methods.type as payment_method_type')
            ->selectRaw('COUNT(payments.id) as total_payments')
            ->selectRaw('COALESCE(SUM(payments.amount), 0) as total_amount')
            ->where('payments.status', 'paid')
            ->when(!empty($filters['payment_method_id']), fn ($query) => $query->where('payments.payment_method_id', (int) $filters['payment_method_id']))
            ->groupBy('payment_methods.id', 'payment_methods.code', 'payment_methods.name', 'payment_methods.type')
            ->orderByDesc('total_amount')
            ->get()
            ->map(fn ($row) => [
                'payment_method_id' => (int) $row->payment_method_id,
                'payment_method_code' => $row->payment_method_code,
                'payment_method_name' => $row->payment_method_name,
                'payment_method_type' => $row->payment_method_type,
                'total_payments' => (int) $row->total_payments,
                'total_amount' => (float) $row->total_amount,
            ]);
    }

    public function promoUsage(array $filters): array
    {
        $voucherQuery = DB::table('voucher_usages')
            ->join('vouchers', 'vouchers.id', '=', 'voucher_usages.voucher_id')
            ->join('orders', 'orders.id', '=', 'voucher_usages.order_id');

        $this->applyOrderFilters($voucherQuery, $filters);

        $vouchers = $voucherQuery
            ->selectRaw('vouchers.id as voucher_id')
            ->selectRaw('vouchers.code as voucher_code')
            ->selectRaw('vouchers.name as voucher_name')
            ->selectRaw('COUNT(voucher_usages.id) as total_usage')
            ->selectRaw('COALESCE(SUM(voucher_usages.discount_amount), 0) as total_discount')
            ->groupBy('vouchers.id', 'vouchers.code', 'vouchers.name')
            ->orderByDesc('total_discount')
            ->get()
            ->map(fn ($row) => [
                'voucher_id' => (int) $row->voucher_id,
                'voucher_code' => $row->voucher_code,
                'voucher_name' => $row->voucher_name,
                'total_usage' => (int) $row->total_usage,
                'total_discount' => (float) $row->total_discount,
            ]);

        $promotionQuery = DB::table('promotion_usages')
            ->join('promotions', 'promotions.id', '=', 'promotion_usages.promotion_id')
            ->join('orders', 'orders.id', '=', 'promotion_usages.order_id');

        $this->applyOrderFilters($promotionQuery, $filters);

        $promotions = $promotionQuery
            ->selectRaw('promotions.id as promotion_id')
            ->selectRaw('promotions.name as promotion_name')
            ->selectRaw('promotions.promotion_type')
            ->selectRaw('COUNT(promotion_usages.id) as total_usage')
            ->selectRaw('COALESCE(SUM(promotion_usages.discount_amount), 0) as total_discount')
            ->groupBy('promotions.id', 'promotions.name', 'promotions.promotion_type')
            ->orderByDesc('total_discount')
            ->get()
            ->map(fn ($row) => [
                'promotion_id' => (int) $row->promotion_id,
                'promotion_name' => $row->promotion_name,
                'promotion_type' => $row->promotion_type,
                'total_usage' => (int) $row->total_usage,
                'total_discount' => (float) $row->total_discount,
            ]);

        return [
            'vouchers' => $vouchers,
            'promotions' => $promotions,
        ];
    }

    public function voidRefund(array $filters): array
    {
        $cancelledOrderQuery = DB::table('orders')
            ->leftJoin('users', 'users.id', '=', 'orders.cancelled_by')
            ->leftJoin('outlets', 'outlets.id', '=', 'orders.outlet_id');

        $this->applyOrderFilters($cancelledOrderQuery, $filters);

        $cancelledOrders = $cancelledOrderQuery
            ->selectRaw('orders.id')
            ->selectRaw('orders.order_number')
            ->selectRaw('orders.order_status')
            ->selectRaw('orders.payment_status')
            ->selectRaw('orders.grand_total')
            ->selectRaw('orders.cancelled_at')
            ->selectRaw('users.name as cancelled_by_name')
            ->selectRaw('outlets.name as outlet_name')
            ->where('orders.order_status', 'cancelled')
            ->orderByDesc('orders.cancelled_at')
            ->limit((int) ($filters['limit'] ?? 10))
            ->get()
            ->map(fn ($row) => [
                'id' => (int) $row->id,
                'order_number' => $row->order_number,
                'order_status' => $row->order_status,
                'payment_status' => $row->payment_status,
                'grand_total' => (float) $row->grand_total,
                'cancelled_at' => $row->cancelled_at,
                'cancelled_by_name' => $row->cancelled_by_name,
                'outlet_name' => $row->outlet_name,
            ]);

        $paymentQuery = DB::table('payments')
            ->join('orders', 'orders.id', '=', 'payments.order_id')
            ->join('payment_methods', 'payment_methods.id', '=', 'payments.payment_method_id')
            ->leftJoin('outlets', 'outlets.id', '=', 'orders.outlet_id');

        $this->applyOrderFilters($paymentQuery, $filters);

        $payments = $paymentQuery
            ->selectRaw('payments.id')
            ->selectRaw('orders.order_number')
            ->selectRaw('payment_methods.name as payment_method_name')
            ->selectRaw('payments.amount')
            ->selectRaw('payments.status')
            ->selectRaw('payments.paid_at')
            ->selectRaw('outlets.name as outlet_name')
            ->whereIn('payments.status', ['cancelled', 'refunded'])
            ->orderByDesc('payments.paid_at')
            ->limit((int) ($filters['limit'] ?? 10))
            ->get()
            ->map(fn ($row) => [
                'id' => (int) $row->id,
                'order_number' => $row->order_number,
                'payment_method_name' => $row->payment_method_name,
                'amount' => (float) $row->amount,
                'status' => $row->status,
                'paid_at' => $row->paid_at,
                'outlet_name' => $row->outlet_name,
            ]);

        return [
            'cancelled_orders' => $cancelledOrders,
            'cancelled_or_refunded_payments' => $payments,
        ];
    }

    public function lowStocks(array $filters): Collection
    {
        $query = DB::table('outlet_material_stocks')
            ->join('outlets', 'outlets.id', '=', 'outlet_material_stocks.outlet_id')
            ->join('raw_materials', 'raw_materials.id', '=', 'outlet_material_stocks.raw_material_id')
            ->join('units', 'units.id', '=', 'raw_materials.unit_id');

        return $query
            ->selectRaw('outlets.id as outlet_id')
            ->selectRaw('outlets.code as outlet_code')
            ->selectRaw('outlets.name as outlet_name')
            ->selectRaw('raw_materials.id as raw_material_id')
            ->selectRaw('raw_materials.code as raw_material_code')
            ->selectRaw('raw_materials.name as raw_material_name')
            ->selectRaw('units.code as unit_code')
            ->selectRaw('raw_materials.minimum_stock')
            ->selectRaw('outlet_material_stocks.qty_on_hand')
            ->selectRaw('(outlet_material_stocks.qty_on_hand - raw_materials.minimum_stock) as stock_gap')
            ->whereColumn('outlet_material_stocks.qty_on_hand', '<=', 'raw_materials.minimum_stock')
            ->where('raw_materials.is_active', true)
            ->when(!empty($filters['outlet_id']), fn ($query) => $query->where('outlet_material_stocks.outlet_id', (int) $filters['outlet_id']))
            ->when(!empty($filters['raw_material_id']), fn ($query) => $query->where('outlet_material_stocks.raw_material_id', (int) $filters['raw_material_id']))
            ->orderBy('stock_gap')
            ->limit((int) ($filters['limit'] ?? 100))
            ->get()
            ->map(fn ($row) => [
                'outlet_id' => (int) $row->outlet_id,
                'outlet_code' => $row->outlet_code,
                'outlet_name' => $row->outlet_name,
                'raw_material_id' => (int) $row->raw_material_id,
                'raw_material_code' => $row->raw_material_code,
                'raw_material_name' => $row->raw_material_name,
                'unit_code' => $row->unit_code,
                'minimum_stock' => (float) $row->minimum_stock,
                'qty_on_hand' => (float) $row->qty_on_hand,
                'stock_gap' => (float) $row->stock_gap,
            ]);
    }

    public function purchaseMaterials(array $filters): Collection
    {
        $query = DB::table('goods_receipt_items')
            ->join('goods_receipts', 'goods_receipts.id', '=', 'goods_receipt_items.goods_receipt_id')
            ->join('purchase_orders', 'purchase_orders.id', '=', 'goods_receipts.purchase_order_id')
            ->join('suppliers', 'suppliers.id', '=', 'purchase_orders.supplier_id')
            ->join('outlets', 'outlets.id', '=', 'goods_receipts.outlet_id')
            ->join('raw_materials', 'raw_materials.id', '=', 'goods_receipt_items.raw_material_id')
            ->join('units', 'units.id', '=', 'goods_receipt_items.unit_id');

        return $query
            ->selectRaw('raw_materials.id as raw_material_id')
            ->selectRaw('raw_materials.name as raw_material_name')
            ->selectRaw('units.code as unit_code')
            ->selectRaw('suppliers.id as supplier_id')
            ->selectRaw('suppliers.name as supplier_name')
            ->selectRaw('outlets.id as outlet_id')
            ->selectRaw('outlets.name as outlet_name')
            ->selectRaw('COUNT(goods_receipt_items.id) as total_receipt_items')
            ->selectRaw('COALESCE(SUM(goods_receipt_items.qty_received), 0) as total_qty_received')
            ->selectRaw('COALESCE(SUM(goods_receipt_items.line_total), 0) as total_amount')
            ->where('goods_receipts.status', 'posted')
            ->when(!empty($filters['outlet_id']), fn ($query) => $query->where('goods_receipts.outlet_id', (int) $filters['outlet_id']))
            ->when(!empty($filters['supplier_id']), fn ($query) => $query->where('purchase_orders.supplier_id', (int) $filters['supplier_id']))
            ->when(!empty($filters['raw_material_id']), fn ($query) => $query->where('goods_receipt_items.raw_material_id', (int) $filters['raw_material_id']))
            ->when(!empty($filters['date_from']), fn ($query) => $query->whereDate('goods_receipts.received_date', '>=', $filters['date_from']))
            ->when(!empty($filters['date_until']), fn ($query) => $query->whereDate('goods_receipts.received_date', '<=', $filters['date_until']))
            ->groupBy(
                'raw_materials.id',
                'raw_materials.name',
                'units.code',
                'suppliers.id',
                'suppliers.name',
                'outlets.id',
                'outlets.name'
            )
            ->orderByDesc('total_amount')
            ->get()
            ->map(fn ($row) => [
                'raw_material_id' => (int) $row->raw_material_id,
                'raw_material_name' => $row->raw_material_name,
                'unit_code' => $row->unit_code,
                'supplier_id' => (int) $row->supplier_id,
                'supplier_name' => $row->supplier_name,
                'outlet_id' => (int) $row->outlet_id,
                'outlet_name' => $row->outlet_name,
                'total_receipt_items' => (int) $row->total_receipt_items,
                'total_qty_received' => (float) $row->total_qty_received,
                'total_amount' => (float) $row->total_amount,
            ]);
    }

    public function expenses(array $filters): Collection
    {
        $query = DB::table('expenses')
            ->join('expense_categories', 'expense_categories.id', '=', 'expenses.expense_category_id')
            ->join('outlets', 'outlets.id', '=', 'expenses.outlet_id')
            ->leftJoin('users as creators', 'creators.id', '=', 'expenses.created_by')
            ->leftJoin('users as approvers', 'approvers.id', '=', 'expenses.approved_by');

        return $query
            ->selectRaw('expenses.id')
            ->selectRaw('expenses.expense_date')
            ->selectRaw('outlets.id as outlet_id')
            ->selectRaw('outlets.name as outlet_name')
            ->selectRaw('expense_categories.id as expense_category_id')
            ->selectRaw('expense_categories.name as expense_category_name')
            ->selectRaw('expenses.amount')
            ->selectRaw('expenses.status')
            ->selectRaw('expenses.description')
            ->selectRaw('creators.name as created_by_name')
            ->selectRaw('approvers.name as approved_by_name')
            ->where('expenses.status', 'approved')
            ->when(!empty($filters['outlet_id']), fn ($query) => $query->where('expenses.outlet_id', (int) $filters['outlet_id']))
            ->when(!empty($filters['expense_category_id']), fn ($query) => $query->where('expenses.expense_category_id', (int) $filters['expense_category_id']))
            ->when(!empty($filters['date_from']), fn ($query) => $query->whereDate('expenses.expense_date', '>=', $filters['date_from']))
            ->when(!empty($filters['date_until']), fn ($query) => $query->whereDate('expenses.expense_date', '<=', $filters['date_until']))
            ->orderByDesc('expenses.expense_date')
            ->get()
            ->map(fn ($row) => [
                'id' => (int) $row->id,
                'expense_date' => $row->expense_date,
                'outlet_id' => (int) $row->outlet_id,
                'outlet_name' => $row->outlet_name,
                'expense_category_id' => (int) $row->expense_category_id,
                'expense_category_name' => $row->expense_category_name,
                'amount' => (float) $row->amount,
                'status' => $row->status,
                'description' => $row->description,
                'created_by_name' => $row->created_by_name,
                'approved_by_name' => $row->approved_by_name,
            ]);
    }

    public function shiftSummary(array $filters): Collection
    {
        $query = DB::table('cashier_shifts')
            ->join('outlets', 'outlets.id', '=', 'cashier_shifts.outlet_id')
            ->join('users', 'users.id', '=', 'cashier_shifts.user_id')
            ->leftJoin('orders', 'orders.cashier_shift_id', '=', 'cashier_shifts.id');

        return $query
            ->selectRaw('cashier_shifts.id')
            ->selectRaw('cashier_shifts.shift_number')
            ->selectRaw('cashier_shifts.status')
            ->selectRaw('cashier_shifts.opened_at')
            ->selectRaw('cashier_shifts.closed_at')
            ->selectRaw('outlets.id as outlet_id')
            ->selectRaw('outlets.name as outlet_name')
            ->selectRaw('users.id as cashier_id')
            ->selectRaw('users.name as cashier_name')
            ->selectRaw('cashier_shifts.opening_cash')
            ->selectRaw('cashier_shifts.expected_cash')
            ->selectRaw('cashier_shifts.closing_cash')
            ->selectRaw('cashier_shifts.cash_difference')
            ->selectRaw('COUNT(orders.id) as total_orders')
            ->selectRaw('COALESCE(SUM(orders.grand_total), 0) as grand_total')
            ->when(!empty($filters['outlet_id']), fn ($query) => $query->where('cashier_shifts.outlet_id', (int) $filters['outlet_id']))
            ->when(!empty($filters['cashier_id']), fn ($query) => $query->where('cashier_shifts.user_id', (int) $filters['cashier_id']))
            ->when(!empty($filters['status']), fn ($query) => $query->where('cashier_shifts.status', $filters['status']))
            ->when(!empty($filters['date_from']), fn ($query) => $query->whereDate('cashier_shifts.opened_at', '>=', $filters['date_from']))
            ->when(!empty($filters['date_until']), fn ($query) => $query->whereDate('cashier_shifts.opened_at', '<=', $filters['date_until']))
            ->groupBy(
                'cashier_shifts.id',
                'cashier_shifts.shift_number',
                'cashier_shifts.status',
                'cashier_shifts.opened_at',
                'cashier_shifts.closed_at',
                'outlets.id',
                'outlets.name',
                'users.id',
                'users.name',
                'cashier_shifts.opening_cash',
                'cashier_shifts.expected_cash',
                'cashier_shifts.closing_cash',
                'cashier_shifts.cash_difference'
            )
            ->orderByDesc('cashier_shifts.id')
            ->get()
            ->map(fn ($row) => [
                'id' => (int) $row->id,
                'shift_number' => $row->shift_number,
                'status' => $row->status,
                'opened_at' => $row->opened_at,
                'closed_at' => $row->closed_at,
                'outlet_id' => (int) $row->outlet_id,
                'outlet_name' => $row->outlet_name,
                'cashier_id' => (int) $row->cashier_id,
                'cashier_name' => $row->cashier_name,
                'opening_cash' => (float) $row->opening_cash,
                'expected_cash' => (float) $row->expected_cash,
                'closing_cash' => (float) $row->closing_cash,
                'cash_difference' => (float) $row->cash_difference,
                'total_orders' => (int) $row->total_orders,
                'grand_total' => (float) $row->grand_total,
            ]);
    }

    public function orderDetails(array $filters): LengthAwarePaginator
    {
        $query = DB::table('orders')
            ->leftJoin('outlets', 'outlets.id', '=', 'orders.outlet_id')
            ->leftJoin('users', 'users.id', '=', 'orders.created_by')
            ->leftJoin('customers', 'customers.id', '=', 'orders.customer_id');

        $this->applyOrderFilters($query, $filters);

        return $query
            ->selectRaw('orders.id')
            ->selectRaw('orders.order_number')
            ->selectRaw('orders.queue_number')
            ->selectRaw('orders.order_channel')
            ->selectRaw('orders.order_status')
            ->selectRaw('orders.payment_status')
            ->selectRaw('orders.subtotal')
            ->selectRaw('orders.discount_amount')
            ->selectRaw('orders.tax_amount')
            ->selectRaw('orders.service_charge_amount')
            ->selectRaw('orders.grand_total')
            ->selectRaw('orders.paid_total')
            ->selectRaw('orders.change_amount')
            ->selectRaw('orders.ordered_at')
            ->selectRaw('orders.completed_at')
            ->selectRaw('outlets.name as outlet_name')
            ->selectRaw('users.name as cashier_name')
            ->selectRaw('customers.name as customer_name')
            ->orderByDesc('orders.ordered_at')
            ->paginate((int) ($filters['per_page'] ?? 10));
    }

    private function applyOrderFilters(Builder $query, array $filters): void
    {
        $query
            ->when(!empty($filters['outlet_id']), fn ($query) => $query->where('orders.outlet_id', (int) $filters['outlet_id']))
            ->when(!empty($filters['date_from']), fn ($query) => $query->whereDate('orders.ordered_at', '>=', $filters['date_from']))
            ->when(!empty($filters['date_until']), fn ($query) => $query->whereDate('orders.ordered_at', '<=', $filters['date_until']));
    }

    private function dateGroupExpression(string $column, string $groupBy): string
    {
        return match ($groupBy) {
            'day' => "DATE({$column})",
            'week' => "YEARWEEK({$column}, 1)",
            'month' => "DATE_FORMAT({$column}, '%Y-%m')",
            default => throw new InvalidArgumentException('group_by tidak valid.'),
        };
    }

    private function normalizedFilters(array $filters): array
    {
        return [
            'outlet_id' => isset($filters['outlet_id']) ? (int) $filters['outlet_id'] : null,
            'date_from' => $filters['date_from'] ?? null,
            'date_until' => $filters['date_until'] ?? null,
            'generated_at' => Carbon::now('Asia/Jakarta')->toDateTimeString(),
        ];
    }
}

```
</details>

<a id="file-appservicessalesorderservicephp"></a>
### app\Services\Sales\OrderService.php
- SHA: `6fff2b5e4ac4`  
- Ukuran: 16 KB  
- Namespace: `App\Services\Sales`

**Class `OrderService`**

Metode Publik:
- **create**(array $payload, ?int $userId = null) : *Order*
- **update**(Order $order, array $payload) : *Order*
- **changeStatus**(Order $order, string $newStatus, int $userId, ?string $notes = null) : *Order*
- **cancel**(Order $order, int $userId, ?string $notes = null) : *Order*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Sales;

use App\Models\CashierShift;
use App\Models\Order;
use App\Models\OrderStatusHistory;
use App\Models\Product;
use App\Models\ProductPrice;
use App\Services\Kitchen\KitchenTicketService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class OrderService
{
    public function create(array $payload, ?int $userId = null): Order
    {
        return DB::transaction(function () use ($payload, $userId) {
            $items = $payload['items'];
            unset($payload['items']);

            $outletId = (int) $payload['outlet_id'];

            $this->validateCashierShift(
                cashierShiftId: $payload['cashier_shift_id'] ?? null,
                outletId: $outletId,
            );

            [$subtotal, $normalizedItems] = $this->prepareItemsAndTotals(
                outletId: $outletId,
                items: $items,
            );

            $discountAmount = (float) ($payload['discount_amount'] ?? 0);
            $taxAmount = (float) ($payload['tax_amount'] ?? 0);
            $serviceChargeAmount = (float) ($payload['service_charge_amount'] ?? 0);
            $grandTotal = $subtotal - $discountAmount + $taxAmount + $serviceChargeAmount;

            $order = Order::query()->create([
                'outlet_id' => $outletId,
                'cashier_shift_id' => $payload['cashier_shift_id'] ?? null,
                'customer_id' => $payload['customer_id'] ?? null,
                'order_number' => $this->generateOrderNumber($outletId),
                'queue_number' => $payload['queue_number'] ?? null,
                'order_channel' => $payload['order_channel'] ?? 'pos',
                'order_status' => $payload['order_status'] ?? 'draft',
                'payment_status' => $payload['payment_status'] ?? 'unpaid',
                'subtotal' => $subtotal,
                'discount_amount' => $discountAmount,
                'tax_amount' => $taxAmount,
                'service_charge_amount' => $serviceChargeAmount,
                'grand_total' => $grandTotal,
                'paid_total' => 0,
                'change_amount' => 0,
                'notes' => $payload['notes'] ?? null,
                'ordered_at' => $payload['ordered_at'] ?? now(),
                'created_by' => $userId,
            ]);

            foreach ($normalizedItems as $item) {
                $orderItem = $order->items()->create([
                    'product_id' => $item['product_id'],
                    'product_name_snapshot' => $item['product_name_snapshot'],
                    'sku_snapshot' => $item['sku_snapshot'],
                    'qty' => $item['qty'],
                    'unit_price' => $item['unit_price'],
                    'discount_amount' => $item['discount_amount'],
                    'line_total' => $item['line_total'],
                    'notes' => $item['notes'],
                ]);

                foreach ($item['variants'] as $variant) {
                    $orderItem->variants()->create([
                        'variant_group_name_snapshot' => $variant['variant_group_name_snapshot'],
                        'variant_option_name_snapshot' => $variant['variant_option_name_snapshot'],
                        'price_adjustment' => $variant['price_adjustment'],
                    ]);
                }

                foreach ($item['modifiers'] as $modifier) {
                    $orderItem->modifiers()->create([
                        'modifier_group_name_snapshot' => $modifier['modifier_group_name_snapshot'],
                        'modifier_option_name_snapshot' => $modifier['modifier_option_name_snapshot'],
                        'qty' => $modifier['qty'],
                        'price' => $modifier['price'],
                    ]);
                }
            }

            $this->createStatusHistory(
                orderId: $order->id,
                status: $order->order_status,
                userId: $userId,
                notes: 'Order dibuat.',
            );

            $order = $order->fresh()->load($this->defaultRelations());

            $this->syncKitchenTicketByOrderStatus($order);

            return $order->fresh()->load($this->defaultRelations());
        });
    }

    public function update(Order $order, array $payload): Order
    {
        return DB::transaction(function () use ($order, $payload) {
            if ($order->order_status !== 'draft') {
                throw ValidationException::withMessages([
                    'order_status' => ['Hanya order draft yang boleh diupdate.'],
                ]);
            }

            $items = $payload['items'] ?? null;
            unset($payload['items']);

            $outletId = (int) ($payload['outlet_id'] ?? $order->outlet_id);

            $this->validateCashierShift(
                cashierShiftId: $payload['cashier_shift_id'] ?? $order->cashier_shift_id,
                outletId: $outletId,
            );

            if ($items !== null) {
                [$subtotal, $normalizedItems] = $this->prepareItemsAndTotals(
                    outletId: $outletId,
                    items: $items,
                );

                $discountAmount = (float) ($payload['discount_amount'] ?? $order->discount_amount);
                $taxAmount = (float) ($payload['tax_amount'] ?? $order->tax_amount);
                $serviceChargeAmount = (float) ($payload['service_charge_amount'] ?? $order->service_charge_amount);
                $grandTotal = $subtotal - $discountAmount + $taxAmount + $serviceChargeAmount;

                $order->items()->delete();

                foreach ($normalizedItems as $item) {
                    $orderItem = $order->items()->create([
                        'product_id' => $item['product_id'],
                        'product_name_snapshot' => $item['product_name_snapshot'],
                        'sku_snapshot' => $item['sku_snapshot'],
                        'qty' => $item['qty'],
                        'unit_price' => $item['unit_price'],
                        'discount_amount' => $item['discount_amount'],
                        'line_total' => $item['line_total'],
                        'notes' => $item['notes'],
                    ]);

                    foreach ($item['variants'] as $variant) {
                        $orderItem->variants()->create([
                            'variant_group_name_snapshot' => $variant['variant_group_name_snapshot'],
                            'variant_option_name_snapshot' => $variant['variant_option_name_snapshot'],
                            'price_adjustment' => $variant['price_adjustment'],
                        ]);
                    }

                    foreach ($item['modifiers'] as $modifier) {
                        $orderItem->modifiers()->create([
                            'modifier_group_name_snapshot' => $modifier['modifier_group_name_snapshot'],
                            'modifier_option_name_snapshot' => $modifier['modifier_option_name_snapshot'],
                            'qty' => $modifier['qty'],
                            'price' => $modifier['price'],
                        ]);
                    }
                }

                $payload['subtotal'] = $subtotal;
                $payload['grand_total'] = $grandTotal;
            }

            $order->update($payload);

            return $order->fresh()->load($this->defaultRelations());
        });
    }

    public function changeStatus(Order $order, string $newStatus, int $userId, ?string $notes = null): Order
    {
        return DB::transaction(function () use ($order, $newStatus, $userId, $notes) {
            $allowedStatuses = ['draft', 'pending', 'confirmed', 'preparing', 'ready', 'completed', 'cancelled'];

            if (!in_array($newStatus, $allowedStatuses, true)) {
                throw ValidationException::withMessages([
                    'status' => ['Status order tidak valid.'],
                ]);
            }

            if ($order->order_status === 'cancelled') {
                throw ValidationException::withMessages([
                    'status' => ['Order yang sudah cancelled tidak bisa diubah lagi.'],
                ]);
            }

            $updatePayload = [
                'order_status' => $newStatus,
            ];

            if ($newStatus === 'completed') {
                $updatePayload['completed_at'] = now();
            }

            $order->update($updatePayload);

            $this->createStatusHistory(
                orderId: $order->id,
                status: $newStatus,
                userId: $userId,
                notes: $notes,
            );

            $order = $order->fresh()->load($this->defaultRelations());

            $this->syncKitchenTicketByOrderStatus($order);

            return $order->fresh()->load($this->defaultRelations());
        });
    }

    public function cancel(Order $order, int $userId, ?string $notes = null): Order
    {
        return DB::transaction(function () use ($order, $userId, $notes) {
            if ($order->order_status === 'completed') {
                throw ValidationException::withMessages([
                    'order_status' => ['Order yang sudah completed tidak bisa dibatalkan.'],
                ]);
            }

            $order->update([
                'order_status' => 'cancelled',
                'payment_status' => $order->payment_status === 'paid' ? $order->payment_status : 'cancelled',
                'cancelled_at' => now(),
                'cancelled_by' => $userId,
            ]);

            $this->createStatusHistory(
                orderId: $order->id,
                status: 'cancelled',
                userId: $userId,
                notes: $notes,
            );

            $order = $order->fresh()->load($this->defaultRelations());

            $this->syncKitchenTicketByOrderStatus($order);

            return $order->fresh()->load($this->defaultRelations());
        });
    }

    private function validateCashierShift(?int $cashierShiftId, int $outletId): void
    {
        if (!$cashierShiftId) {
            return;
        }

        $cashierShift = CashierShift::query()
            ->whereKey($cashierShiftId)
            ->where('outlet_id', $outletId)
            ->first();

        if (!$cashierShift) {
            throw ValidationException::withMessages([
                'cashier_shift_id' => ['Shift kasir tidak ditemukan untuk outlet tersebut.'],
            ]);
        }

        if ($cashierShift->status !== 'open') {
            throw ValidationException::withMessages([
                'cashier_shift_id' => ['Shift kasir harus dalam status open.'],
            ]);
        }
    }

    private function prepareItemsAndTotals(int $outletId, array $items): array
    {
        if (empty($items)) {
            throw ValidationException::withMessages([
                'items' => ['Minimal harus ada 1 item order.'],
            ]);
        }

        $subtotal = 0;
        $normalizedItems = [];

        foreach ($items as $index => $item) {
            $productId = (int) ($item['product_id'] ?? 0);
            $qty = (float) ($item['qty'] ?? 0);

            if ($productId <= 0 || $qty <= 0) {
                throw ValidationException::withMessages([
                    "items.{$index}.product_id" => ['Produk item tidak valid.'],
                    "items.{$index}.qty" => ['Qty item harus lebih dari 0.'],
                ]);
            }

            $product = Product::query()
                ->whereKey($productId)
                ->where('is_active', true)
                ->first();

            if (!$product) {
                throw ValidationException::withMessages([
                    "items.{$index}.product_id" => ['Produk tidak ditemukan atau tidak aktif.'],
                ]);
            }

            $productPrice = ProductPrice::query()
                ->where('product_id', $productId)
                ->where('outlet_id', $outletId)
                ->where('is_active', true)
                ->latest('id')
                ->first();

            $baseUnitPrice = (float) ($productPrice?->price ?? $product->base_price);

            $variants = [];
            $variantAdjustmentTotal = 0;

            foreach (($item['variants'] ?? []) as $variant) {
                $adjustment = (float) ($variant['price_adjustment'] ?? 0);

                $variants[] = [
                    'variant_group_name_snapshot' => $variant['variant_group_name_snapshot'] ?? ($variant['group_name'] ?? '-'),
                    'variant_option_name_snapshot' => $variant['variant_option_name_snapshot'] ?? ($variant['option_name'] ?? '-'),
                    'price_adjustment' => $adjustment,
                ];

                $variantAdjustmentTotal += $adjustment;
            }

            $modifiers = [];
            $modifierTotalPerUnit = 0;

            foreach (($item['modifiers'] ?? []) as $modifier) {
                $modifierQty = (float) ($modifier['qty'] ?? 1);
                $modifierPrice = (float) ($modifier['price'] ?? 0);

                $modifiers[] = [
                    'modifier_group_name_snapshot' => $modifier['modifier_group_name_snapshot'] ?? ($modifier['group_name'] ?? '-'),
                    'modifier_option_name_snapshot' => $modifier['modifier_option_name_snapshot'] ?? ($modifier['option_name'] ?? '-'),
                    'qty' => $modifierQty,
                    'price' => $modifierPrice,
                ];

                $modifierTotalPerUnit += ($modifierQty * $modifierPrice);
            }

            $discountAmount = (float) ($item['discount_amount'] ?? 0);
            $unitPrice = $baseUnitPrice + $variantAdjustmentTotal + $modifierTotalPerUnit;
            $lineTotal = ($unitPrice * $qty) - $discountAmount;

            if ($lineTotal < 0) {
                throw ValidationException::withMessages([
                    "items.{$index}.discount_amount" => ['Discount item tidak boleh melebihi total item.'],
                ]);
            }

            $normalizedItems[] = [
                'product_id' => $product->id,
                'product_name_snapshot' => $product->name,
                'sku_snapshot' => $product->sku,
                'qty' => $qty,
                'unit_price' => $unitPrice,
                'discount_amount' => $discountAmount,
                'line_total' => $lineTotal,
                'notes' => $item['notes'] ?? null,
                'variants' => $variants,
                'modifiers' => $modifiers,
            ];

            $subtotal += $lineTotal;
        }

        return [$subtotal, $normalizedItems];
    }

    private function createStatusHistory(int $orderId, string $status, ?int $userId = null, ?string $notes = null): void
    {
        OrderStatusHistory::query()->create([
            'order_id' => $orderId,
            'status' => $status,
            'changed_by' => $userId,
            'notes' => $notes,
            'changed_at' => now(),
        ]);
    }

    private function generateOrderNumber(int $outletId): string
    {
        do {
            $orderNumber = sprintf(
                'ORD-%d-%s-%s',
                $outletId,
                now()->format('Ymd'),
                strtoupper(Str::padLeft((string) random_int(1, 9999), 4, '0'))
            );

            $exists = Order::query()->where('order_number', $orderNumber)->exists();

            if (!$exists) {
                return $orderNumber;
            }
        } while (true);
    }

    private function syncKitchenTicketByOrderStatus(Order $order): void
    {
        /** @var KitchenTicketService $kitchenTicketService */
        $kitchenTicketService = app(KitchenTicketService::class);

        if (in_array($order->order_status, ['confirmed', 'preparing', 'ready', 'completed', 'cancelled'], true)) {
            $kitchenTicketService->syncFromOrder($order);
        }
    }

    private function defaultRelations(): array
    {
        return [
            'outlet',
            'cashierShift',
            'customer',
            'creator',
            'canceller',
            'items.product',
            'items.variants',
            'items.modifiers',
            'statusHistories.changer',
            'kitchenTickets.items.orderItem',
        ];
    }
}

```
</details>

<a id="file-appservicessalespaymentservicephp"></a>
### app\Services\Sales\PaymentService.php
- SHA: `db616eb59e9d`  
- Ukuran: 6 KB  
- Namespace: `App\Services\Sales`

**Class `PaymentService`**

Metode Publik:
- **create**(array $payload, ?int $userId = null) : *Payment*
- **cancel**(Payment $payment, ?string $notes = null) : *Payment*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Sales;

use App\Models\CashierShift;
use App\Models\Order;
use App\Models\Payment;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class PaymentService
{
    public function create(array $payload, ?int $userId = null): Payment
    {
        return DB::transaction(function () use ($payload, $userId) {
            $order = Order::query()
                ->with('cashierShift')
                ->findOrFail($payload['order_id']);

            if ($order->order_status === 'cancelled') {
                throw ValidationException::withMessages([
                    'order_id' => ['Order yang dibatalkan tidak bisa dibayar.'],
                ]);
            }

            $paymentMethod = PaymentMethod::query()
                ->whereKey($payload['payment_method_id'])
                ->where('is_active', true)
                ->first();

            if (!$paymentMethod) {
                throw ValidationException::withMessages([
                    'payment_method_id' => ['Metode pembayaran tidak ditemukan atau tidak aktif.'],
                ]);
            }

            if ((float) $payload['amount'] <= 0) {
                throw ValidationException::withMessages([
                    'amount' => ['Nominal pembayaran harus lebih dari 0.'],
                ]);
            }

            if ($paymentMethod->type === 'cash' && $order->cashier_shift_id) {
                $this->ensureOpenShift($order->cashierShift);
            }

            $payment = Payment::create([
                'order_id' => $order->id,
                'payment_method_id' => $paymentMethod->id,
                'amount' => $payload['amount'],
                'reference_number' => $payload['reference_number'] ?? null,
                'paid_at' => $payload['paid_at'] ?? now(),
                'status' => $payload['status'] ?? 'paid',
                'notes' => $payload['notes'] ?? null,
                'received_by' => $userId,
            ]);

            $this->syncOrderPaymentSummary($order->fresh());

            if ($paymentMethod->type === 'cash' && $order->cashier_shift_id) {
                $this->refreshShiftExpectedCash((int) $order->cashier_shift_id);
            }

            return $payment->fresh()->load([
                'order.outlet',
                'order.cashierShift',
                'paymentMethod',
                'receiver',
            ]);
        });
    }

    public function cancel(Payment $payment, ?string $notes = null): Payment
    {
        return DB::transaction(function () use ($payment, $notes) {
            if (in_array($payment->status, ['cancelled', 'refunded'], true)) {
                throw ValidationException::withMessages([
                    'status' => ['Payment ini sudah tidak aktif.'],
                ]);
            }

            $order = $payment->order()->with('cashierShift')->firstOrFail();
            $paymentMethod = $payment->paymentMethod()->first();

            $payment->update([
                'status' => 'cancelled',
                'notes' => $notes ?: $payment->notes,
            ]);

            $this->syncOrderPaymentSummary($order->fresh());

            if ($paymentMethod && $paymentMethod->type === 'cash' && $order->cashier_shift_id) {
                $this->refreshShiftExpectedCash((int) $order->cashier_shift_id);
            }

            return $payment->fresh()->load([
                'order.outlet',
                'order.cashierShift',
                'paymentMethod',
                'receiver',
            ]);
        });
    }

    private function syncOrderPaymentSummary(Order $order): void
    {
        $paidTotal = (float) $order->payments()
            ->where('status', 'paid')
            ->sum('amount');

        $paymentStatus = 'unpaid';

        if ($paidTotal > 0 && $paidTotal < (float) $order->grand_total) {
            $paymentStatus = 'partial';
        } elseif ($paidTotal >= (float) $order->grand_total && (float) $order->grand_total > 0) {
            $paymentStatus = 'paid';
        }

        $order->update([
            'paid_total' => $paidTotal,
            'payment_status' => $paymentStatus,
            'change_amount' => max(0, $paidTotal - (float) $order->grand_total),
        ]);
    }

    private function ensureOpenShift(?CashierShift $shift): void
    {
        if (!$shift) {
            throw ValidationException::withMessages([
                'order_id' => ['Order cash wajib terhubung ke shift kasir.'],
            ]);
        }

        if ($shift->status !== 'open') {
            throw ValidationException::withMessages([
                'order_id' => ['Shift kasir untuk order ini harus dalam status open.'],
            ]);
        }
    }

    private function refreshShiftExpectedCash(int $shiftId): void
    {
        $shift = CashierShift::query()->findOrFail($shiftId);

        $cashSalesTotal = (float) Payment::query()
            ->where('status', 'paid')
            ->whereHas('paymentMethod', fn ($query) => $query->where('type', 'cash'))
            ->whereHas('order', fn ($query) => $query->where('cashier_shift_id', $shift->id))
            ->sum('amount');

        $cashInTotal = (float) $shift->cashMovements()
            ->where('movement_type', 'cash_in')
            ->sum('amount');

        $cashOutTotal = (float) $shift->cashMovements()
            ->where('movement_type', 'cash_out')
            ->sum('amount');

        $shift->update([
            'expected_cash' => (float) $shift->opening_cash + $cashSalesTotal + $cashInTotal - $cashOutTotal,
        ]);
    }
}

```
</details>

<a id="file-appservicessystemsettingsystemsettingservicephp"></a>
### app\Services\SystemSetting\SystemSettingService.php
- SHA: `87e179c3a4f9`  
- Ukuran: 1 KB  
- Namespace: `App\Services\SystemSetting`

**Class `SystemSettingService`**

Metode Publik:
- **upsertMany**(array $settings) : *Collection*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\SystemSetting;

use App\Models\SystemSetting;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class SystemSettingService
{
    public function upsertMany(array $settings): Collection
    {
        return DB::transaction(function () use ($settings) {
            $items = collect();

            foreach ($settings as $setting) {
                $items->push(
                    SystemSetting::updateOrCreate(
                        ['key' => $setting['key']],
                        [
                            'value' => $this->normalizeValue($setting['value'] ?? null, $setting['type']),
                            'type' => $setting['type'],
                        ]
                    )
                );
            }

            return $items;
        });
    }

    private function normalizeValue(mixed $value, string $type): mixed
    {
        return match ($type) {
            'boolean' => is_null($value) ? null : ($value ? '1' : '0'),
            'json' => is_null($value) ? null : json_encode($value, JSON_UNESCAPED_UNICODE),
            default => is_null($value) ? null : (string) $value,
        };
    }
}

```
</details>

<a id="file-appservicesuseruserservicephp"></a>
### app\Services\User\UserService.php
- SHA: `80d032ca528f`  
- Ukuran: 3 KB  
- Namespace: `App\Services\User`

**Class `UserService`**

Metode Publik:
- **create**(array $payload) : *User*
- **update**(User $user, array $payload) : *User*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\User;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class UserService
{
    public function create(array $payload): User
    {
        return DB::transaction(function () use ($payload) {
            $roles = $payload['roles'] ?? [];
            $outletIds = $payload['outlet_ids'] ?? [];
            $defaultOutletId = $payload['default_outlet_id'] ?? null;

            unset($payload['roles'], $payload['outlet_ids'], $payload['default_outlet_id']);

            $user = User::create($payload);
            $user->syncRoles($roles);

            $this->syncOutletAccesses(
                user: $user,
                roles: $roles,
                outletIds: $outletIds,
                defaultOutletId: $defaultOutletId,
            );

            return $user->fresh()->load('roles', 'permissions', 'outletAccesses.outlet');
        });
    }

    public function update(User $user, array $payload): User
    {
        return DB::transaction(function () use ($user, $payload) {
            $roles = $payload['roles'] ?? null;
            $outletIds = $payload['outlet_ids'] ?? null;
            $defaultOutletId = $payload['default_outlet_id'] ?? null;

            unset($payload['roles'], $payload['outlet_ids'], $payload['default_outlet_id']);

            if (empty($payload['password'])) {
                unset($payload['password']);
            }

            $user->update($payload);

            if (is_array($roles)) {
                $user->syncRoles($roles);
            }

            if (is_array($outletIds)) {
                $this->syncOutletAccesses(
                    user: $user,
                    roles: is_array($roles) ? $roles : $user->getRoleNames()->all(),
                    outletIds: $outletIds,
                    defaultOutletId: $defaultOutletId,
                );
            }

            return $user->fresh()->load('roles', 'permissions', 'outletAccesses.outlet');
        });
    }

    private function syncOutletAccesses(User $user, array $roles, array $outletIds, ?int $defaultOutletId): void
    {
        $hasCentralAccess = collect($roles)->intersect(['superadmin', 'admin_pusat'])->isNotEmpty();

        if (! $hasCentralAccess && empty($outletIds)) {
            throw ValidationException::withMessages([
                'outlet_ids' => ['User non-pusat wajib memiliki minimal satu akses outlet.'],
            ]);
        }

        if (empty($outletIds)) {
            $user->outletAccesses()->delete();
            return;
        }

        if ($defaultOutletId && ! in_array($defaultOutletId, $outletIds, true)) {
            throw ValidationException::withMessages([
                'default_outlet_id' => ['Default outlet harus termasuk dalam daftar outlet_ids.'],
            ]);
        }

        $defaultOutletId ??= $outletIds[0];

        $syncPayload = [];
        foreach ($outletIds as $outletId) {
            $syncPayload[$outletId] = [
                'is_default' => (int) $outletId === (int) $defaultOutletId,
            ];
        }

        $user->outlets()->sync($syncPayload);
    }
}

```
</details>

<a id="file-appservicesvouchervoucherservicephp"></a>
### app\Services\Voucher\VoucherService.php
- SHA: `1239bcad1326`  
- Ukuran: 2 KB  
- Namespace: `App\Services\Voucher`

**Class `VoucherService`**

Metode Publik:
- **create**(array $payload) : *Voucher*
- **update**(Voucher $voucher, array $payload) : *Voucher*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Services\Voucher;

use App\Models\Voucher;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class VoucherService
{
    public function create(array $payload): Voucher
    {
        return DB::transaction(function () use ($payload) {
            $this->validateBusinessRules($payload);

            return Voucher::create([
                'code' => strtoupper($payload['code']),
                'name' => $payload['name'],
                'description' => $payload['description'] ?? null,
                'discount_type' => $payload['discount_type'],
                'discount_value' => $payload['discount_value'],
                'max_discount' => $payload['max_discount'] ?? null,
                'min_order_total' => $payload['min_order_total'] ?? 0,
                'quota' => $payload['quota'] ?? null,
                'used_count' => $payload['used_count'] ?? 0,
                'starts_at' => $payload['starts_at'] ?? null,
                'ends_at' => $payload['ends_at'] ?? null,
                'is_active' => $payload['is_active'] ?? true,
                'applies_to' => $payload['applies_to'],
            ]);
        });
    }

    public function update(Voucher $voucher, array $payload): Voucher
    {
        return DB::transaction(function () use ($voucher, $payload) {
            $merged = array_merge($voucher->toArray(), $payload);

            $this->validateBusinessRules($merged);

            if (array_key_exists('code', $payload)) {
                $payload['code'] = strtoupper($payload['code']);
            }

            $voucher->update($payload);

            return $voucher->fresh();
        });
    }

    private function validateBusinessRules(array $payload): void
    {
        if (($payload['discount_type'] ?? null) === 'percent' && (float) ($payload['discount_value'] ?? 0) > 100) {
            throw ValidationException::withMessages([
                'discount_value' => ['Voucher persen tidak boleh lebih dari 100.'],
            ]);
        }

        $startsAt = $payload['starts_at'] ?? null;
        $endsAt = $payload['ends_at'] ?? null;

        if ($startsAt && $endsAt && strtotime((string) $endsAt) < strtotime((string) $startsAt)) {
            throw ValidationException::withMessages([
                'ends_at' => ['ends_at tidak boleh lebih kecil dari starts_at.'],
            ]);
        }
    }
}
```
</details>


## Database Seeders (database/seeders)

<a id="file-databaseseedersdatabaseseederphp"></a>
### database\seeders\DatabaseSeeder.php
- SHA: `d627c8a70178`  
- Ukuran: 597 B  
- Namespace: `Database\Seeders`

**Class `DatabaseSeeder` extends `Seeder`**

Metode Publik:
- **run**() : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            SuperAdminSeeder::class,
            PaymentMethodSeeder::class,
            KitchenPermissionSeeder::class,
            KitchenRolePermissionSeeder::class,
            DeliveryPermissionSeeder::class,
            ExpensePermissionSeeder::class,
            ExpenseCategorySeeder::class,
            ReportPermissionSeeder::class,
        ]);
    }
}

```
</details>

<a id="file-databaseseedersdeliverypermissionseederphp"></a>
### database\seeders\DeliveryPermissionSeeder.php
- SHA: `f2ace0379475`  
- Ukuran: 686 B  
- Namespace: `Database\Seeders`

**Class `DeliveryPermissionSeeder` extends `Seeder`**

Metode Publik:
- **run**() : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class DeliveryPermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'couriers.view',
            'couriers.create',
            'couriers.update',
            'couriers.delete',
            'deliveries.view',
            'deliveries.create',
            'deliveries.update',
            'deliveries.delete',
            'deliveries.assign',
            'deliveries.update_status',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission, 'sanctum');
        }
    }
}

```
</details>

<a id="file-databaseseedersexpensecategoryseederphp"></a>
### database\seeders\ExpenseCategorySeeder.php
- SHA: `b3d2fec57bb8`  
- Ukuran: 600 B  
- Namespace: `Database\Seeders`

**Class `ExpenseCategorySeeder` extends `Seeder`**

Metode Publik:
- **run**() : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace Database\Seeders;

use App\Models\ExpenseCategory;
use Illuminate\Database\Seeder;

class ExpenseCategorySeeder extends Seeder
{
    public function run(): void
    {
        $rows = [
            'Gas',
            'Listrik',
            'Kebersihan',
            'Transport',
            'Pembelian Kecil',
            'Perbaikan Outlet',
            'Operasional Lainnya',
        ];

        foreach ($rows as $name) {
            ExpenseCategory::query()->updateOrCreate(
                ['name' => $name],
                ['is_active' => true]
            );
        }
    }
}

```
</details>

<a id="file-databaseseedersexpensepermissionseederphp"></a>
### database\seeders\ExpensePermissionSeeder.php
- SHA: `026f604d0b85`  
- Ukuran: 2 KB  
- Namespace: `Database\Seeders`

**Class `ExpensePermissionSeeder` extends `Seeder`**

Metode Publik:
- **run**() : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ExpensePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'expense_categories.view',
            'expense_categories.create',
            'expense_categories.update',
            'expense_categories.delete',

            'expenses.view',
            'expenses.create',
            'expenses.update',
            'expenses.delete',
            'expenses.submit',
            'expenses.approve',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission, 'sanctum');
        }

        Role::findOrCreate('superadmin', 'sanctum')->givePermissionTo($permissions);

        Role::findOrCreate('admin_pusat', 'sanctum')->givePermissionTo($permissions);

        Role::findOrCreate('admin_outlet', 'sanctum')->givePermissionTo([
            'expense_categories.view',
            'expenses.view',
            'expenses.create',
            'expenses.update',
            'expenses.delete',
            'expenses.submit',
        ]);

        Role::findOrCreate('kasir', 'sanctum')->givePermissionTo([
            'expense_categories.view',
            'expenses.view',
            'expenses.create',
            'expenses.update',
            'expenses.submit',
        ]);

        Role::findOrCreate('owner', 'sanctum')->givePermissionTo([
            'expense_categories.view',
            'expenses.view',
        ]);
    }
}

```
</details>

<a id="file-databaseseederskitchenpermissionseederphp"></a>
### database\seeders\KitchenPermissionSeeder.php
- SHA: `ab1af0f13254`  
- Ukuran: 711 B  
- Namespace: `Database\Seeders`

**Class `KitchenPermissionSeeder` extends `Seeder`**

Metode Publik:
- **run**() : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class KitchenPermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'kitchen_tickets.view',
            'kitchen_tickets.create',
            'kitchen_tickets.update',
            'kitchen_tickets.delete',
            'kitchen_tickets.print',
            'kitchen_tickets.start_preparing',
            'kitchen_tickets.mark_ready',
            'kitchen_tickets.serve',
            'kitchen_tickets.cancel',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission, 'sanctum');
        }
    }
}

```
</details>

<a id="file-databaseseederskitchenrolepermissionseederphp"></a>
### database\seeders\KitchenRolePermissionSeeder.php
- SHA: `47c5d7130349`  
- Ukuran: 948 B  
- Namespace: `Database\Seeders`

**Class `KitchenRolePermissionSeeder` extends `Seeder`**

Metode Publik:
- **run**() : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class KitchenRolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $kitchenPermissions = [
            'kitchen_tickets.view',
            'kitchen_tickets.create',
            'kitchen_tickets.update',
            'kitchen_tickets.print',
            'kitchen_tickets.start_preparing',
            'kitchen_tickets.mark_ready',
            'kitchen_tickets.serve',
            'kitchen_tickets.cancel',
        ];

        $dapur = Role::findByName('dapur', 'sanctum');
        $dapur->givePermissionTo($kitchenPermissions);

        foreach (['superadmin', 'admin_pusat', 'admin_outlet'] as $roleName) {
            $role = Role::findByName($roleName, 'sanctum');
            $role->givePermissionTo(array_merge($kitchenPermissions, [
                'kitchen_tickets.delete',
            ]));
        }
    }
}

```
</details>

<a id="file-databaseseederspaymentmethodseederphp"></a>
### database\seeders\PaymentMethodSeeder.php
- SHA: `4b8039c83587`  
- Ukuran: 914 B  
- Namespace: `Database\Seeders`

**Class `PaymentMethodSeeder` extends `Seeder`**

Metode Publik:
- **run**() : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    public function run(): void
    {
        $rows = [
            [
                'code' => 'cash',
                'name' => 'Tunai',
                'type' => 'cash',
                'is_active' => true,
            ],
            [
                'code' => 'qris',
                'name' => 'QRIS',
                'type' => 'qris',
                'is_active' => true,
            ],
            [
                'code' => 'transfer',
                'name' => 'Transfer Bank',
                'type' => 'transfer',
                'is_active' => true,
            ],
        ];

        foreach ($rows as $row) {
            PaymentMethod::query()->updateOrCreate(
                ['code' => $row['code']],
                $row
            );
        }
    }
}

```
</details>

<a id="file-databaseseederspermissionseederphp"></a>
### database\seeders\PermissionSeeder.php
- SHA: `c2b56e33366f`  
- Ukuran: 5 KB  
- Namespace: `Database\Seeders`

**Class `PermissionSeeder` extends `Seeder`**

Metode Publik:
- **run**() : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'users.view',
            'users.create',
            'users.update',
            'users.delete',

            'roles.view',
            'roles.create',
            'roles.update',
            'roles.delete',

            'permissions.view',
            'permissions.create',
            'permissions.update',
            'permissions.delete',

            'outlets.view',
            'outlets.create',
            'outlets.update',
            'outlets.delete',

            'outlet_settings.view',
            'outlet_settings.update',

            'system_settings.view',
            'system_settings.update',

            'product_categories.view',
            'product_categories.create',
            'product_categories.update',
            'product_categories.delete',

            'products.view',
            'products.create',
            'products.update',
            'products.delete',

            'product_variants.view',
            'product_variants.create',
            'product_variants.update',
            'product_variants.delete',

            'product_modifiers.view',
            'product_modifiers.create',
            'product_modifiers.update',
            'product_modifiers.delete',

            'product_bundles.view',
            'product_bundles.create',
            'product_bundles.update',
            'product_bundles.delete',

            'customers.view',
            'customers.create',
            'customers.update',
            'customers.delete',

            'vouchers.view',
            'vouchers.create',
            'vouchers.update',
            'vouchers.delete',

            'promotions.view',
            'promotions.create',
            'promotions.update',
            'promotions.delete',

            'units.view',
            'units.create',
            'units.update',
            'units.delete',

            'unit_conversions.view',
            'unit_conversions.create',
            'unit_conversions.update',
            'unit_conversions.delete',

            'raw_material_categories.view',
            'raw_material_categories.create',
            'raw_material_categories.update',
            'raw_material_categories.delete',

            'raw_materials.view',
            'raw_materials.create',
            'raw_materials.update',
            'raw_materials.delete',

            'outlet_material_stocks.view',
            'outlet_material_stocks.update',

            'product_boms.view',
            'product_boms.create',
            'product_boms.update',
            'product_boms.delete',

            'suppliers.view',
            'suppliers.create',
            'suppliers.update',
            'suppliers.delete',

            'purchase_orders.view',
            'purchase_orders.create',
            'purchase_orders.update',
            'purchase_orders.delete',
            'purchase_orders.approve',
            'purchase_orders.cancel',

            'goods_receipts.view',
            'goods_receipts.create',
            'goods_receipts.update',
            'goods_receipts.delete',
            'goods_receipts.post',
            'goods_receipts.cancel',

            'stock_movements.view',

            'stock_adjustments.view',
            'stock_adjustments.create',
            'stock_adjustments.update',
            'stock_adjustments.delete',

            'stock_transfers.view',
            'stock_transfers.create',
            'stock_transfers.update',
            'stock_transfers.delete',
            'stock_transfers.send',
            'stock_transfers.receive',
            'stock_transfers.cancel',

            'stock_opnames.view',
            'stock_opnames.create',
            'stock_opnames.update',
            'stock_opnames.delete',
            'stock_opnames.post',
            'stock_opnames.cancel',

            'payment_methods.view',
            'payment_methods.create',
            'payment_methods.update',
            'payment_methods.delete',

            'payments.view',
            'payments.create',
            'payments.cancel',

            'cashier_shifts.view',
            'cashier_shifts.create',
            'cashier_shifts.update',
            'cashier_shifts.close',

            'cash_movements.view',
            'cash_movements.create',

            'orders.view',
            'orders.create',
            'orders.update',
            'orders.delete',
            'orders.cancel',

            'reports.view',
            'reports.export',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission, 'sanctum');
        }
    }
}

```
</details>

<a id="file-databaseseedersreportpermissionseederphp"></a>
### database\seeders\ReportPermissionSeeder.php
- SHA: `b6050a325214`  
- Ukuran: 637 B  
- Namespace: `Database\Seeders`

**Class `ReportPermissionSeeder` extends `Seeder`**

Metode Publik:
- **run**() : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ReportPermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'reports.view',
            'reports.export',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission, 'sanctum');
        }

        foreach (['superadmin', 'admin_pusat', 'admin_outlet', 'owner'] as $roleName) {
            Role::findOrCreate($roleName, 'sanctum')->givePermissionTo($permissions);
        }
    }
}

```
</details>

<a id="file-databaseseedersroleseederphp"></a>
### database\seeders\RoleSeeder.php
- SHA: `2b7fd3d69e64`  
- Ukuran: 12 KB  
- Namespace: `Database\Seeders`

**Class `RoleSeeder` extends `Seeder`**

Metode Publik:
- **run**() : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $superadmin  = Role::findOrCreate('superadmin', 'sanctum');
        $adminPusat  = Role::findOrCreate('admin_pusat', 'sanctum');
        $adminOutlet = Role::findOrCreate('admin_outlet', 'sanctum');
        $kasir       = Role::findOrCreate('kasir', 'sanctum');
        $dapur       = Role::findOrCreate('dapur', 'sanctum');
        $gudang      = Role::findOrCreate('gudang', 'sanctum');
        $owner       = Role::findOrCreate('owner', 'sanctum');

        $allPermissions = Permission::query()->pluck('name')->all();

        $superadmin->syncPermissions($allPermissions);

        $adminPusat->syncPermissions([
            'users.view',
            'users.create',
            'users.update',

            'roles.view',
            'permissions.view',

            'outlets.view',
            'outlets.create',
            'outlets.update',

            'outlet_settings.view',
            'outlet_settings.update',

            'system_settings.view',
            'system_settings.update',

            'product_categories.view',
            'product_categories.create',
            'product_categories.update',
            'product_categories.delete',

            'products.view',
            'products.create',
            'products.update',
            'products.delete',

            'product_variants.view',
            'product_variants.create',
            'product_variants.update',

            'product_modifiers.view',
            'product_modifiers.create',
            'product_modifiers.update',

            'product_bundles.view',
            'product_bundles.create',
            'product_bundles.update',

            'customers.view',
            'customers.create',
            'customers.update',
            'customers.delete',

            'vouchers.view',
            'vouchers.create',
            'vouchers.update',
            'vouchers.delete',

            'promotions.view',
            'promotions.create',
            'promotions.update',
            'promotions.delete',

            'units.view',
            'units.create',
            'units.update',
            'units.delete',

            'unit_conversions.view',
            'unit_conversions.create',
            'unit_conversions.update',
            'unit_conversions.delete',

            'raw_material_categories.view',
            'raw_material_categories.create',
            'raw_material_categories.update',
            'raw_material_categories.delete',

            'raw_materials.view',
            'raw_materials.create',
            'raw_materials.update',
            'raw_materials.delete',

            'outlet_material_stocks.view',
            'outlet_material_stocks.update',

            'product_boms.view',
            'product_boms.create',
            'product_boms.update',
            'product_boms.delete',

            'suppliers.view',
            'suppliers.create',
            'suppliers.update',
            'suppliers.delete',

            'purchase_orders.view',
            'purchase_orders.create',
            'purchase_orders.update',
            'purchase_orders.delete',
            'purchase_orders.approve',
            'purchase_orders.cancel',

            'goods_receipts.view',
            'goods_receipts.create',
            'goods_receipts.update',
            'goods_receipts.delete',
            'goods_receipts.post',
            'goods_receipts.cancel',

            'stock_movements.view',

            'stock_adjustments.view',
            'stock_adjustments.create',
            'stock_adjustments.update',
            'stock_adjustments.delete',

            'stock_transfers.view',
            'stock_transfers.create',
            'stock_transfers.update',
            'stock_transfers.delete',
            'stock_transfers.send',
            'stock_transfers.receive',
            'stock_transfers.cancel',

            'stock_opnames.view',
            'stock_opnames.create',
            'stock_opnames.update',
            'stock_opnames.delete',
            'stock_opnames.post',
            'stock_opnames.cancel',

            'payment_methods.view',
            'payment_methods.create',
            'payment_methods.update',
            'payment_methods.delete',

            'payments.view',
            'payments.create',
            'payments.cancel',

            'cashier_shifts.view',
            'cashier_shifts.create',
            'cashier_shifts.update',
            'cashier_shifts.close',

            'cash_movements.view',
            'cash_movements.create',

            'orders.view',
            'orders.create',
            'orders.update',
            'orders.delete',
            'orders.cancel',

            'couriers.view',
            'couriers.create',
            'couriers.update',
            'couriers.delete',

            'deliveries.view',
            'deliveries.create',
            'deliveries.update',
            'deliveries.delete',
            'deliveries.assign',
            'deliveries.update_status',

            'expense_categories.view',
            'expense_categories.create',
            'expense_categories.update',
            'expense_categories.delete',

            'expenses.view',
            'expenses.create',
            'expenses.update',
            'expenses.delete',
            'expenses.submit',
            'expenses.approve',

            'reports.view',
            'reports.export',
        ]);

        $adminOutlet->syncPermissions([
            'users.view',

            'outlets.view',

            'outlet_settings.view',
            'outlet_settings.update',

            'product_categories.view',

            'products.view',
            'products.create',
            'products.update',

            'product_variants.view',
            'product_variants.create',
            'product_variants.update',

            'product_modifiers.view',
            'product_modifiers.create',
            'product_modifiers.update',

            'product_bundles.view',
            'product_bundles.create',
            'product_bundles.update',

            'customers.view',
            'customers.create',
            'customers.update',

            'vouchers.view',
            'promotions.view',

            'suppliers.view',

            'purchase_orders.view',
            'purchase_orders.create',
            'purchase_orders.update',

            'goods_receipts.view',
            'goods_receipts.create',
            'goods_receipts.update',
            'goods_receipts.post',

            'stock_movements.view',

            'stock_adjustments.view',
            'stock_adjustments.create',
            'stock_adjustments.update',

            'stock_transfers.view',
            'stock_transfers.create',
            'stock_transfers.update',
            'stock_transfers.send',
            'stock_transfers.receive',

            'stock_opnames.view',
            'stock_opnames.create',
            'stock_opnames.update',
            'stock_opnames.post',

            'payment_methods.view',
            'payments.view',
            'payments.create',
            'payments.cancel',

            'cashier_shifts.view',
            'cashier_shifts.create',
            'cashier_shifts.update',
            'cashier_shifts.close',

            'cash_movements.view',
            'cash_movements.create',

            'orders.view',
            'orders.create',
            'orders.update',
            'orders.cancel',

            'couriers.view',
            'couriers.create',
            'couriers.update',

            'deliveries.view',
            'deliveries.create',
            'deliveries.update',
            'deliveries.assign',
            'deliveries.update_status',

            'expense_categories.view',

            'expenses.view',
            'expenses.create',
            'expenses.update',
            'expenses.delete',
            'expenses.submit',

            'reports.view',
        ]);

        $kasir->syncPermissions([
            'outlets.view',
            'outlet_settings.view',

            'product_categories.view',
            'products.view',
            'product_variants.view',
            'product_modifiers.view',
            'product_bundles.view',

            'customers.view',
            'customers.create',
            'customers.update',

            'vouchers.view',
            'promotions.view',

            'payment_methods.view',
            'payments.view',
            'payments.create',

            'cashier_shifts.view',
            'cashier_shifts.create',
            'cashier_shifts.update',
            'cashier_shifts.close',

            'cash_movements.view',
            'cash_movements.create',

            'orders.view',
            'orders.create',
            'orders.update',
            'orders.cancel',

            'couriers.view',

            'deliveries.view',
            'deliveries.create',
            'deliveries.update',
            'deliveries.assign',
            'deliveries.update_status',

            'expense_categories.view',

            'expenses.view',
            'expenses.create',
            'expenses.update',
            'expenses.submit',
        ]);

        $dapur->syncPermissions([
            'orders.view',
        ]);

        $gudang->syncPermissions([
            'units.view',
            'units.create',
            'units.update',

            'unit_conversions.view',
            'unit_conversions.create',
            'unit_conversions.update',

            'raw_material_categories.view',
            'raw_material_categories.create',
            'raw_material_categories.update',

            'raw_materials.view',
            'raw_materials.create',
            'raw_materials.update',

            'outlet_material_stocks.view',
            'outlet_material_stocks.update',

            'product_boms.view',
            'product_boms.create',
            'product_boms.update',

            'suppliers.view',
            'suppliers.create',
            'suppliers.update',

            'purchase_orders.view',
            'purchase_orders.create',
            'purchase_orders.update',

            'goods_receipts.view',
            'goods_receipts.create',
            'goods_receipts.update',
            'goods_receipts.post',

            'stock_movements.view',

            'stock_adjustments.view',
            'stock_adjustments.create',
            'stock_adjustments.update',

            'stock_transfers.view',
            'stock_transfers.create',
            'stock_transfers.update',
            'stock_transfers.send',
            'stock_transfers.receive',

            'stock_opnames.view',
            'stock_opnames.create',
            'stock_opnames.update',
            'stock_opnames.post',
        ]);

        $owner->syncPermissions([
            'users.view',
            'roles.view',
            'permissions.view',

            'outlets.view',
            'outlet_settings.view',
            'system_settings.view',

            'product_categories.view',
            'products.view',
            'product_variants.view',
            'product_modifiers.view',
            'product_bundles.view',

            'customers.view',
            'vouchers.view',
            'promotions.view',

            'suppliers.view',
            'purchase_orders.view',
            'goods_receipts.view',

            'stock_movements.view',
            'stock_adjustments.view',
            'stock_transfers.view',
            'stock_opnames.view',

            'payment_methods.view',
            'payments.view',
            'cashier_shifts.view',
            'cash_movements.view',

            'orders.view',

            'couriers.view',
            'deliveries.view',

            'expense_categories.view',
            'expenses.view',

            'reports.view',
            'reports.export',
        ]);
    }
}

```
</details>

<a id="file-databaseseederssuperadminseederphp"></a>
### database\seeders\SuperAdminSeeder.php
- SHA: `89f3447a2d33`  
- Ukuran: 610 B  
- Namespace: `Database\Seeders`

**Class `SuperAdminSeeder` extends `Seeder`**

Metode Publik:
- **run**() : *void*
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::updateOrCreate(
            ['email' => 'superadmin@chickenalibaba.test'],
            [
                'name' => 'Super Admin',
                'phone' => '081234567890',
                'username' => 'superadmin',
                'password' => 'password123',
                'is_active' => true,
                'user_type' => 'superadmin',
            ]
        );

        $user->syncRoles(['superadmin']);
    }
}

```
</details>


## Entry Files

<a id="file-routesapiphp"></a>
### routes\api.php
- SHA: `86da06ff4733`  
- Ukuran: 19 KB  
- Namespace: ``

**Ringkasan Routes (deteksi heuristik):**

| Method | Path | Controller | Action |
|---|---|---|---|
| POST | `/auth/login` | `AuthController` | `login` |
| GET | `/auth/me` | `AuthController` | `me` |
| POST | `/auth/logout` | `AuthController` | `logout` |
| PATCH | `/auth/change-password` | `AuthController` | `changePassword` |
| GET | `/users` | `UserController` | `index` |
| POST | `/users` | `UserController` | `store` |
| GET | `/users/{user}` | `UserController` | `show` |
| PUT | `/users/{user}` | `UserController` | `update` |
| DELETE | `/users/{user}` | `UserController` | `destroy` |
| GET | `/roles` | `RoleController` | `index` |
| POST | `/roles` | `RoleController` | `store` |
| GET | `/roles/{role}` | `RoleController` | `show` |
| PUT | `/roles/{role}` | `RoleController` | `update` |
| DELETE | `/roles/{role}` | `RoleController` | `destroy` |
| GET | `/permissions` | `PermissionController` | `index` |
| POST | `/permissions` | `PermissionController` | `store` |
| GET | `/permissions/{permission}` | `PermissionController` | `show` |
| PUT | `/permissions/{permission}` | `PermissionController` | `update` |
| DELETE | `/permissions/{permission}` | `PermissionController` | `destroy` |
| GET | `/outlets` | `OutletController` | `index` |
| POST | `/outlets` | `OutletController` | `store` |
| GET | `/outlets/{outlet}` | `OutletController` | `show` |
| PUT | `/outlets/{outlet}` | `OutletController` | `update` |
| DELETE | `/outlets/{outlet}` | `OutletController` | `destroy` |
| GET | `/outlets/{outlet}/settings` | `OutletSettingController` | `show` |
| PUT | `/outlets/{outlet}/settings` | `OutletSettingController` | `update` |
| GET | `/system-settings` | `SystemSettingController` | `index` |
| POST | `/system-settings/upsert` | `SystemSettingController` | `upsert` |
| GET | `/product-categories` | `ProductCategoryController` | `index` |
| POST | `/product-categories` | `ProductCategoryController` | `store` |
| GET | `/product-categories/{productCategory}` | `ProductCategoryController` | `show` |
| PUT | `/product-categories/{productCategory}` | `ProductCategoryController` | `update` |
| DELETE | `/product-categories/{productCategory}` | `ProductCategoryController` | `destroy` |
| GET | `/products` | `ProductController` | `index` |
| POST | `/products` | `ProductController` | `store` |
| GET | `/products/{product}` | `ProductController` | `show` |
| PUT | `/products/{product}` | `ProductController` | `update` |
| DELETE | `/products/{product}` | `ProductController` | `destroy` |
| GET | `/customers` | `CustomerController` | `index` |
| POST | `/customers` | `CustomerController` | `store` |
| GET | `/customers/{customer}` | `CustomerController` | `show` |
| PUT | `/customers/{customer}` | `CustomerController` | `update` |
| DELETE | `/customers/{customer}` | `CustomerController` | `destroy` |
| GET | `/vouchers` | `VoucherController` | `index` |
| POST | `/vouchers` | `VoucherController` | `store` |
| GET | `/vouchers/{voucher}` | `VoucherController` | `show` |
| PUT | `/vouchers/{voucher}` | `VoucherController` | `update` |
| DELETE | `/vouchers/{voucher}` | `VoucherController` | `destroy` |
| GET | `/promotions` | `PromotionController` | `index` |
| POST | `/promotions` | `PromotionController` | `store` |
| GET | `/promotions/{promotion}` | `PromotionController` | `show` |
| PUT | `/promotions/{promotion}` | `PromotionController` | `update` |
| DELETE | `/promotions/{promotion}` | `PromotionController` | `destroy` |
| GET | `/units` | `UnitController` | `index` |
| POST | `/units` | `UnitController` | `store` |
| GET | `/units/{unit}` | `UnitController` | `show` |
| PUT | `/units/{unit}` | `UnitController` | `update` |
| DELETE | `/units/{unit}` | `UnitController` | `destroy` |
| GET | `/unit-conversions` | `UnitConversionController` | `index` |
| POST | `/unit-conversions` | `UnitConversionController` | `store` |
| GET | `/unit-conversions/{unitConversion}` | `UnitConversionController` | `show` |
| PUT | `/unit-conversions/{unitConversion}` | `UnitConversionController` | `update` |
| DELETE | `/unit-conversions/{unitConversion}` | `UnitConversionController` | `destroy` |
| GET | `/raw-material-categories` | `RawMaterialCategoryController` | `index` |
| POST | `/raw-material-categories` | `RawMaterialCategoryController` | `store` |
| GET | `/raw-material-categories/{rawMaterialCategory}` | `RawMaterialCategoryController` | `show` |
| PUT | `/raw-material-categories/{rawMaterialCategory}` | `RawMaterialCategoryController` | `update` |
| DELETE | `/raw-material-categories/{rawMaterialCategory}` | `RawMaterialCategoryController` | `destroy` |
| GET | `/raw-materials` | `RawMaterialController` | `index` |
| POST | `/raw-materials` | `RawMaterialController` | `store` |
| GET | `/raw-materials/{rawMaterial}` | `RawMaterialController` | `show` |
| PUT | `/raw-materials/{rawMaterial}` | `RawMaterialController` | `update` |
| DELETE | `/raw-materials/{rawMaterial}` | `RawMaterialController` | `destroy` |
| GET | `/outlet-material-stocks` | `OutletMaterialStockController` | `index` |
| POST | `/outlet-material-stocks/upsert` | `OutletMaterialStockController` | `upsert` |
| GET | `/outlet-material-stocks/{outletMaterialStock}` | `OutletMaterialStockController` | `show` |
| GET | `/product-boms` | `ProductBomController` | `index` |
| POST | `/product-boms` | `ProductBomController` | `store` |
| GET | `/product-boms/{productBom}` | `ProductBomController` | `show` |
| PUT | `/product-boms/{productBom}` | `ProductBomController` | `update` |
| DELETE | `/product-boms/{productBom}` | `ProductBomController` | `destroy` |
| GET | `/suppliers` | `SupplierController` | `index` |
| POST | `/suppliers` | `SupplierController` | `store` |
| GET | `/suppliers/{supplier}` | `SupplierController` | `show` |
| PUT | `/suppliers/{supplier}` | `SupplierController` | `update` |
| DELETE | `/suppliers/{supplier}` | `SupplierController` | `destroy` |
| GET | `/purchase-orders` | `PurchaseOrderController` | `index` |
| POST | `/purchase-orders` | `PurchaseOrderController` | `store` |
| GET | `/purchase-orders/{purchaseOrder}` | `PurchaseOrderController` | `show` |
| PUT | `/purchase-orders/{purchaseOrder}` | `PurchaseOrderController` | `update` |
| DELETE | `/purchase-orders/{purchaseOrder}` | `PurchaseOrderController` | `destroy` |
| POST | `/purchase-orders/{purchaseOrder}/approve` | `PurchaseOrderController` | `approve` |
| POST | `/purchase-orders/{purchaseOrder}/cancel` | `PurchaseOrderController` | `cancel` |
| GET | `/goods-receipts` | `GoodsReceiptController` | `index` |
| POST | `/goods-receipts` | `GoodsReceiptController` | `store` |
| GET | `/goods-receipts/{goodsReceipt}` | `GoodsReceiptController` | `show` |
| PUT | `/goods-receipts/{goodsReceipt}` | `GoodsReceiptController` | `update` |
| DELETE | `/goods-receipts/{goodsReceipt}` | `GoodsReceiptController` | `destroy` |
| POST | `/goods-receipts/{goodsReceipt}/post` | `GoodsReceiptController` | `post` |
| POST | `/goods-receipts/{goodsReceipt}/cancel` | `GoodsReceiptController` | `cancel` |
| GET | `/stock-movements` | `StockMovementController` | `index` |
| GET | `/stock-movements/{stockMovement}` | `StockMovementController` | `show` |
| GET | `/stock-adjustments` | `StockAdjustmentController` | `index` |
| POST | `/stock-adjustments` | `StockAdjustmentController` | `store` |
| GET | `/stock-adjustments/{stockAdjustment}` | `StockAdjustmentController` | `show` |
| PUT | `/stock-adjustments/{stockAdjustment}` | `StockAdjustmentController` | `update` |
| DELETE | `/stock-adjustments/{stockAdjustment}` | `StockAdjustmentController` | `destroy` |
| GET | `/stock-transfers` | `StockTransferController` | `index` |
| POST | `/stock-transfers` | `StockTransferController` | `store` |
| GET | `/stock-transfers/{stockTransfer}` | `StockTransferController` | `show` |
| PUT | `/stock-transfers/{stockTransfer}` | `StockTransferController` | `update` |
| DELETE | `/stock-transfers/{stockTransfer}` | `StockTransferController` | `destroy` |
| POST | `/stock-transfers/{stockTransfer}/send` | `StockTransferController` | `send` |
| POST | `/stock-transfers/{stockTransfer}/receive` | `StockTransferController` | `receive` |
| POST | `/stock-transfers/{stockTransfer}/cancel` | `StockTransferController` | `cancel` |
| GET | `/stock-opnames` | `StockOpnameController` | `index` |
| POST | `/stock-opnames` | `StockOpnameController` | `store` |
| GET | `/stock-opnames/{stockOpname}` | `StockOpnameController` | `show` |
| PUT | `/stock-opnames/{stockOpname}` | `StockOpnameController` | `update` |
| DELETE | `/stock-opnames/{stockOpname}` | `StockOpnameController` | `destroy` |
| POST | `/stock-opnames/{stockOpname}/post` | `StockOpnameController` | `post` |
| POST | `/stock-opnames/{stockOpname}/cancel` | `StockOpnameController` | `cancel` |
| GET | `/payment-methods` | `PaymentMethodController` | `index` |
| POST | `/payment-methods` | `PaymentMethodController` | `store` |
| GET | `/payment-methods/{paymentMethod}` | `PaymentMethodController` | `show` |
| PUT | `/payment-methods/{paymentMethod}` | `PaymentMethodController` | `update` |
| DELETE | `/payment-methods/{paymentMethod}` | `PaymentMethodController` | `destroy` |
| GET | `/cashier-shifts` | `CashierShiftController` | `index` |
| POST | `/cashier-shifts` | `CashierShiftController` | `store` |
| GET | `/cashier-shifts/{cashierShift}` | `CashierShiftController` | `show` |
| PUT | `/cashier-shifts/{cashierShift}` | `CashierShiftController` | `update` |
| POST | `/cashier-shifts/{cashierShift}/close` | `CashierShiftController` | `close` |
| GET | `/cash-movements` | `CashMovementController` | `index` |
| POST | `/cash-movements` | `CashMovementController` | `store` |
| GET | `/cash-movements/{cashMovement}` | `CashMovementController` | `show` |
| GET | `/payments` | `PaymentController` | `index` |
| POST | `/payments` | `PaymentController` | `store` |
| GET | `/payments/{payment}` | `PaymentController` | `show` |
| POST | `/payments/{payment}/cancel` | `PaymentController` | `cancel` |
| GET | `/orders` | `OrderController` | `index` |
| POST | `/orders` | `OrderController` | `store` |
| GET | `/orders/{order}` | `OrderController` | `show` |
| PUT | `/orders/{order}` | `OrderController` | `update` |
| DELETE | `/orders/{order}` | `OrderController` | `destroy` |
| POST | `/orders/{order}/confirm` | `OrderController` | `confirm` |
| POST | `/orders/{order}/complete` | `OrderController` | `complete` |
| POST | `/orders/{order}/cancel` | `OrderController` | `cancel` |
| GET | `kitchen-tickets` | `KitchenTicketController` | `index` |
| POST | `kitchen-tickets` | `KitchenTicketController` | `store` |
| GET | `kitchen-tickets/{kitchenTicket}` | `KitchenTicketController` | `show` |
| POST | `kitchen-tickets/{kitchenTicket}/print` | `KitchenTicketController` | `print` |
| POST | `kitchen-tickets/{kitchenTicket}/start-preparing` | `KitchenTicketController` | `startPreparing` |
| POST | `kitchen-tickets/{kitchenTicket}/ready` | `KitchenTicketController` | `markReady` |
| POST | `kitchen-tickets/{kitchenTicket}/serve` | `KitchenTicketController` | `serve` |
| POST | `kitchen-tickets/{kitchenTicket}/cancel` | `KitchenTicketController` | `cancel` |
| DELETE | `kitchen-tickets/{kitchenTicket}` | `KitchenTicketController` | `destroy` |
| GET | `/couriers` | `CourierController` | `index` |
| POST | `/couriers` | `CourierController` | `store` |
| GET | `/couriers/{courier}` | `CourierController` | `show` |
| PUT | `/couriers/{courier}` | `CourierController` | `update` |
| DELETE | `/couriers/{courier}` | `CourierController` | `destroy` |
| GET | `/deliveries` | `DeliveryController` | `index` |
| POST | `/deliveries` | `DeliveryController` | `store` |
| GET | `/deliveries/{delivery}` | `DeliveryController` | `show` |
| PUT | `/deliveries/{delivery}` | `DeliveryController` | `update` |
| DELETE | `/deliveries/{delivery}` | `DeliveryController` | `destroy` |
| POST | `/deliveries/{delivery}/assign-courier` | `DeliveryController` | `assignCourier` |
| POST | `/deliveries/{delivery}/status` | `DeliveryController` | `updateStatus` |
| GET | `/expense-categories` | `ExpenseCategoryController` | `index` |
| POST | `/expense-categories` | `ExpenseCategoryController` | `store` |
| GET | `/expense-categories/{expenseCategory}` | `ExpenseCategoryController` | `show` |
| PUT | `/expense-categories/{expenseCategory}` | `ExpenseCategoryController` | `update` |
| DELETE | `/expense-categories/{expenseCategory}` | `ExpenseCategoryController` | `destroy` |
| GET | `/expenses` | `ExpenseController` | `index` |
| POST | `/expenses` | `ExpenseController` | `store` |
| GET | `/expenses/{expense}` | `ExpenseController` | `show` |
| PUT | `/expenses/{expense}` | `ExpenseController` | `update` |
| POST | `/expenses/{expense}/submit` | `ExpenseController` | `submit` |
| POST | `/expenses/{expense}/approve` | `ExpenseController` | `approve` |
| POST | `/expenses/{expense}/reject` | `ExpenseController` | `reject` |
| POST | `/expenses/{expense}/attachments` | `ExpenseController` | `uploadAttachments` |
| DELETE | `/expense-attachments/{expenseAttachment}` | `ExpenseController` | `deleteAttachment` |
| DELETE | `/expenses/{expense}` | `ExpenseController` | `destroy` |
| GET | `/reports/sales-summary` | `ReportController` | `salesSummary` |
| GET | `/reports/sales-trend` | `ReportController` | `salesTrend` |
| GET | `/reports/sales-by-outlet` | `ReportController` | `salesByOutlet` |
| GET | `/reports/sales-by-cashier` | `ReportController` | `salesByCashier` |
| GET | `/reports/top-products` | `ReportController` | `topProducts` |
| GET | `/reports/payment-summary` | `ReportController` | `paymentSummary` |
| GET | `/reports/promo-usage` | `ReportController` | `promoUsage` |
| GET | `/reports/void-refund` | `ReportController` | `voidRefund` |
| GET | `/reports/low-stocks` | `ReportController` | `lowStocks` |
| GET | `/reports/purchase-materials` | `ReportController` | `purchaseMaterials` |
| GET | `/reports/expenses` | `ReportController` | `expenses` |
| GET | `/reports/shift-summary` | `ReportController` | `shiftSummary` |
| GET | `/reports/order-details` | `ReportController` | `orderDetails` |
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CashierShiftController;
use App\Http\Controllers\Api\CashMovementController;
use App\Http\Controllers\Api\CourierController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\DeliveryController;
use App\Http\Controllers\Api\ExpenseCategoryController;
use App\Http\Controllers\Api\ExpenseController;
use App\Http\Controllers\Api\GoodsReceiptController;
use App\Http\Controllers\Api\KitchenTicketController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\OutletController;
use App\Http\Controllers\Api\OutletMaterialStockController;
use App\Http\Controllers\Api\OutletSettingController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\PaymentMethodController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\ProductBomController;
use App\Http\Controllers\Api\ProductCategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\PromotionController;
use App\Http\Controllers\Api\PurchaseOrderController;
use App\Http\Controllers\Api\RawMaterialCategoryController;
use App\Http\Controllers\Api\RawMaterialController;
use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\StockAdjustmentController;
use App\Http\Controllers\Api\StockMovementController;
use App\Http\Controllers\Api\StockOpnameController;
use App\Http\Controllers\Api\StockTransferController;
use App\Http\Controllers\Api\SupplierController;
use App\Http\Controllers\Api\SystemSettingController;
use App\Http\Controllers\Api\UnitController;
use App\Http\Controllers\Api\UnitConversionController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\VoucherController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('/auth/login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/auth/me', [AuthController::class, 'me']);
        Route::post('/auth/logout', [AuthController::class, 'logout']);
        Route::patch('/auth/change-password', [AuthController::class, 'changePassword']);

        Route::get('/users', [UserController::class, 'index']);
        Route::post('/users', [UserController::class, 'store']);
        Route::get('/users/{user}', [UserController::class, 'show']);
        Route::put('/users/{user}', [UserController::class, 'update']);
        Route::delete('/users/{user}', [UserController::class, 'destroy']);

        Route::get('/roles', [RoleController::class, 'index']);
        Route::post('/roles', [RoleController::class, 'store']);
        Route::get('/roles/{role}', [RoleController::class, 'show']);
        Route::put('/roles/{role}', [RoleController::class, 'update']);
        Route::delete('/roles/{role}', [RoleController::class, 'destroy']);

        Route::get('/permissions', [PermissionController::class, 'index']);
        Route::post('/permissions', [PermissionController::class, 'store']);
        Route::get('/permissions/{permission}', [PermissionController::class, 'show']);
        Route::put('/permissions/{permission}', [PermissionController::class, 'update']);
        Route::delete('/permissions/{permission}', [PermissionController::class, 'destroy']);

        Route::get('/outlets', [OutletController::class, 'index']);
        Route::post('/outlets', [OutletController::class, 'store']);
        Route::get('/outlets/{outlet}', [OutletController::class, 'show']);
        Route::put('/outlets/{outlet}', [OutletController::class, 'update']);
        Route::delete('/outlets/{outlet}', [OutletController::class, 'destroy']);

        Route::get('/outlets/{outlet}/settings', [OutletSettingController::class, 'show']);
        Route::put('/outlets/{outlet}/settings', [OutletSettingController::class, 'update']);

        Route::get('/system-settings', [SystemSettingController::class, 'index']);
        Route::post('/system-settings/upsert', [SystemSettingController::class, 'upsert']);

        Route::get('/product-categories', [ProductCategoryController::class, 'index']);
        Route::post('/product-categories', [ProductCategoryController::class, 'store']);
        Route::get('/product-categories/{productCategory}', [ProductCategoryController::class, 'show']);
        Route::put('/product-categories/{productCategory}', [ProductCategoryController::class, 'update']);
        Route::delete('/product-categories/{productCategory}', [ProductCategoryController::class, 'destroy']);

        Route::get('/products', [ProductController::class, 'index']);
        Route::post('/products', [ProductController::class, 'store']);
        Route::get('/products/{product}', [ProductController::class, 'show']);
        Route::put('/products/{product}', [ProductController::class, 'update']);
        Route::delete('/products/{product}', [ProductController::class, 'destroy']);

        Route::get('/customers', [CustomerController::class, 'index']);
        Route::post('/customers', [CustomerController::class, 'store']);
        Route::get('/customers/{customer}', [CustomerController::class, 'show']);
        Route::put('/customers/{customer}', [CustomerController::class, 'update']);
        Route::delete('/customers/{customer}', [CustomerController::class, 'destroy']);

        Route::get('/vouchers', [VoucherController::class, 'index']);
        Route::post('/vouchers', [VoucherController::class, 'store']);
        Route::get('/vouchers/{voucher}', [VoucherController::class, 'show']);
        Route::put('/vouchers/{voucher}', [VoucherController::class, 'update']);
        Route::delete('/vouchers/{voucher}', [VoucherController::class, 'destroy']);

        Route::get('/promotions', [PromotionController::class, 'index']);
        Route::post('/promotions', [PromotionController::class, 'store']);
        Route::get('/promotions/{promotion}', [PromotionController::class, 'show']);
        Route::put('/promotions/{promotion}', [PromotionController::class, 'update']);
        Route::delete('/promotions/{promotion}', [PromotionController::class, 'destroy']);

        Route::get('/units', [UnitController::class, 'index']);
        Route::post('/units', [UnitController::class, 'store']);
        Route::get('/units/{unit}', [UnitController::class, 'show']);
        Route::put('/units/{unit}', [UnitController::class, 'update']);
        Route::delete('/units/{unit}', [UnitController::class, 'destroy']);

        Route::get('/unit-conversions', [UnitConversionController::class, 'index']);
        Route::post('/unit-conversions', [UnitConversionController::class, 'store']);
        Route::get('/unit-conversions/{unitConversion}', [UnitConversionController::class, 'show']);
        Route::put('/unit-conversions/{unitConversion}', [UnitConversionController::class, 'update']);
        Route::delete('/unit-conversions/{unitConversion}', [UnitConversionController::class, 'destroy']);

        Route::get('/raw-material-categories', [RawMaterialCategoryController::class, 'index']);
        Route::post('/raw-material-categories', [RawMaterialCategoryController::class, 'store']);
        Route::get('/raw-material-categories/{rawMaterialCategory}', [RawMaterialCategoryController::class, 'show']);
        Route::put('/raw-material-categories/{rawMaterialCategory}', [RawMaterialCategoryController::class, 'update']);
        Route::delete('/raw-material-categories/{rawMaterialCategory}', [RawMaterialCategoryController::class, 'destroy']);

        Route::get('/raw-materials', [RawMaterialController::class, 'index']);
        Route::post('/raw-materials', [RawMaterialController::class, 'store']);
        Route::get('/raw-materials/{rawMaterial}', [RawMaterialController::class, 'show']);
        Route::put('/raw-materials/{rawMaterial}', [RawMaterialController::class, 'update']);
        Route::delete('/raw-materials/{rawMaterial}', [RawMaterialController::class, 'destroy']);

        Route::get('/outlet-material-stocks', [OutletMaterialStockController::class, 'index']);
        Route::post('/outlet-material-stocks/upsert', [OutletMaterialStockController::class, 'upsert']);
        Route::get('/outlet-material-stocks/{outletMaterialStock}', [OutletMaterialStockController::class, 'show']);

        Route::get('/product-boms', [ProductBomController::class, 'index']);
        Route::post('/product-boms', [ProductBomController::class, 'store']);
        Route::get('/product-boms/{productBom}', [ProductBomController::class, 'show']);
        Route::put('/product-boms/{productBom}', [ProductBomController::class, 'update']);
        Route::delete('/product-boms/{productBom}', [ProductBomController::class, 'destroy']);

        Route::get('/suppliers', [SupplierController::class, 'index']);
        Route::post('/suppliers', [SupplierController::class, 'store']);
        Route::get('/suppliers/{supplier}', [SupplierController::class, 'show']);
        Route::put('/suppliers/{supplier}', [SupplierController::class, 'update']);
        Route::delete('/suppliers/{supplier}', [SupplierController::class, 'destroy']);

        Route::get('/purchase-orders', [PurchaseOrderController::class, 'index']);
        Route::post('/purchase-orders', [PurchaseOrderController::class, 'store']);
        Route::get('/purchase-orders/{purchaseOrder}', [PurchaseOrderController::class, 'show']);
        Route::put('/purchase-orders/{purchaseOrder}', [PurchaseOrderController::class, 'update']);
        Route::delete('/purchase-orders/{purchaseOrder}', [PurchaseOrderController::class, 'destroy']);
        Route::post('/purchase-orders/{purchaseOrder}/approve', [PurchaseOrderController::class, 'approve']);
        Route::post('/purchase-orders/{purchaseOrder}/cancel', [PurchaseOrderController::class, 'cancel']);

        Route::get('/goods-receipts', [GoodsReceiptController::class, 'index']);
        Route::post('/goods-receipts', [GoodsReceiptController::class, 'store']);
        Route::get('/goods-receipts/{goodsReceipt}', [GoodsReceiptController::class, 'show']);
        Route::put('/goods-receipts/{goodsReceipt}', [GoodsReceiptController::class, 'update']);
        Route::delete('/goods-receipts/{goodsReceipt}', [GoodsReceiptController::class, 'destroy']);
        Route::post('/goods-receipts/{goodsReceipt}/post', [GoodsReceiptController::class, 'post']);
        Route::post('/goods-receipts/{goodsReceipt}/cancel', [GoodsReceiptController::class, 'cancel']);

        Route::get('/stock-movements', [StockMovementController::class, 'index']);
        Route::get('/stock-movements/{stockMovement}', [StockMovementController::class, 'show']);

        Route::get('/stock-adjustments', [StockAdjustmentController::class, 'index']);
        Route::post('/stock-adjustments', [StockAdjustmentController::class, 'store']);
        Route::get('/stock-adjustments/{stockAdjustment}', [StockAdjustmentController::class, 'show']);
        Route::put('/stock-adjustments/{stockAdjustment}', [StockAdjustmentController::class, 'update']);
        Route::delete('/stock-adjustments/{stockAdjustment}', [StockAdjustmentController::class, 'destroy']);

        Route::get('/stock-transfers', [StockTransferController::class, 'index']);
        Route::post('/stock-transfers', [StockTransferController::class, 'store']);
        Route::get('/stock-transfers/{stockTransfer}', [StockTransferController::class, 'show']);
        Route::put('/stock-transfers/{stockTransfer}', [StockTransferController::class, 'update']);
        Route::delete('/stock-transfers/{stockTransfer}', [StockTransferController::class, 'destroy']);
        Route::post('/stock-transfers/{stockTransfer}/send', [StockTransferController::class, 'send']);
        Route::post('/stock-transfers/{stockTransfer}/receive', [StockTransferController::class, 'receive']);
        Route::post('/stock-transfers/{stockTransfer}/cancel', [StockTransferController::class, 'cancel']);

        Route::get('/stock-opnames', [StockOpnameController::class, 'index']);
        Route::post('/stock-opnames', [StockOpnameController::class, 'store']);
        Route::get('/stock-opnames/{stockOpname}', [StockOpnameController::class, 'show']);
        Route::put('/stock-opnames/{stockOpname}', [StockOpnameController::class, 'update']);
        Route::delete('/stock-opnames/{stockOpname}', [StockOpnameController::class, 'destroy']);
        Route::post('/stock-opnames/{stockOpname}/post', [StockOpnameController::class, 'post']);
        Route::post('/stock-opnames/{stockOpname}/cancel', [StockOpnameController::class, 'cancel']);

        Route::get('/payment-methods', [PaymentMethodController::class, 'index']);
        Route::post('/payment-methods', [PaymentMethodController::class, 'store']);
        Route::get('/payment-methods/{paymentMethod}', [PaymentMethodController::class, 'show']);
        Route::put('/payment-methods/{paymentMethod}', [PaymentMethodController::class, 'update']);
        Route::delete('/payment-methods/{paymentMethod}', [PaymentMethodController::class, 'destroy']);

        Route::get('/cashier-shifts', [CashierShiftController::class, 'index']);
        Route::post('/cashier-shifts', [CashierShiftController::class, 'store']);
        Route::get('/cashier-shifts/{cashierShift}', [CashierShiftController::class, 'show']);
        Route::put('/cashier-shifts/{cashierShift}', [CashierShiftController::class, 'update']);
        Route::post('/cashier-shifts/{cashierShift}/close', [CashierShiftController::class, 'close']);

        Route::get('/cash-movements', [CashMovementController::class, 'index']);
        Route::post('/cash-movements', [CashMovementController::class, 'store']);
        Route::get('/cash-movements/{cashMovement}', [CashMovementController::class, 'show']);

        Route::get('/payments', [PaymentController::class, 'index']);
        Route::post('/payments', [PaymentController::class, 'store']);
        Route::get('/payments/{payment}', [PaymentController::class, 'show']);
        Route::post('/payments/{payment}/cancel', [PaymentController::class, 'cancel']);

        Route::get('/orders', [OrderController::class, 'index']);
        Route::post('/orders', [OrderController::class, 'store']);
        Route::get('/orders/{order}', [OrderController::class, 'show']);
        Route::put('/orders/{order}', [OrderController::class, 'update']);
        Route::delete('/orders/{order}', [OrderController::class, 'destroy']);
        Route::post('/orders/{order}/confirm', [OrderController::class, 'confirm']);
        Route::post('/orders/{order}/complete', [OrderController::class, 'complete']);
        Route::post('/orders/{order}/cancel', [OrderController::class, 'cancel']);

        Route::get('kitchen-tickets', [KitchenTicketController::class, 'index']);
        Route::post('kitchen-tickets', [KitchenTicketController::class, 'store']);
        Route::get('kitchen-tickets/{kitchenTicket}', [KitchenTicketController::class, 'show']);
        Route::post('kitchen-tickets/{kitchenTicket}/print', [KitchenTicketController::class, 'print']);
        Route::post('kitchen-tickets/{kitchenTicket}/start-preparing', [KitchenTicketController::class, 'startPreparing']);
        Route::post('kitchen-tickets/{kitchenTicket}/ready', [KitchenTicketController::class, 'markReady']);
        Route::post('kitchen-tickets/{kitchenTicket}/serve', [KitchenTicketController::class, 'serve']);
        Route::post('kitchen-tickets/{kitchenTicket}/cancel', [KitchenTicketController::class, 'cancel']);
        Route::delete('kitchen-tickets/{kitchenTicket}', [KitchenTicketController::class, 'destroy']);

        Route::get('/couriers', [CourierController::class, 'index']);
        Route::post('/couriers', [CourierController::class, 'store']);
        Route::get('/couriers/{courier}', [CourierController::class, 'show']);
        Route::put('/couriers/{courier}', [CourierController::class, 'update']);
        Route::delete('/couriers/{courier}', [CourierController::class, 'destroy']);

        Route::get('/deliveries', [DeliveryController::class, 'index']);
        Route::post('/deliveries', [DeliveryController::class, 'store']);
        Route::get('/deliveries/{delivery}', [DeliveryController::class, 'show']);
        Route::put('/deliveries/{delivery}', [DeliveryController::class, 'update']);
        Route::delete('/deliveries/{delivery}', [DeliveryController::class, 'destroy']);
        Route::post('/deliveries/{delivery}/assign-courier', [DeliveryController::class, 'assignCourier']);
        Route::post('/deliveries/{delivery}/status', [DeliveryController::class, 'updateStatus']);

        Route::get('/expense-categories', [ExpenseCategoryController::class, 'index']);
        Route::post('/expense-categories', [ExpenseCategoryController::class, 'store']);
        Route::get('/expense-categories/{expenseCategory}', [ExpenseCategoryController::class, 'show']);
        Route::put('/expense-categories/{expenseCategory}', [ExpenseCategoryController::class, 'update']);
        Route::delete('/expense-categories/{expenseCategory}', [ExpenseCategoryController::class, 'destroy']);

        Route::get('/expenses', [ExpenseController::class, 'index']);
        Route::post('/expenses', [ExpenseController::class, 'store']);
        Route::get('/expenses/{expense}', [ExpenseController::class, 'show']);
        Route::put('/expenses/{expense}', [ExpenseController::class, 'update']);
        Route::post('/expenses/{expense}/submit', [ExpenseController::class, 'submit']);
        Route::post('/expenses/{expense}/approve', [ExpenseController::class, 'approve']);
        Route::post('/expenses/{expense}/reject', [ExpenseController::class, 'reject']);
        Route::post('/expenses/{expense}/attachments', [ExpenseController::class, 'uploadAttachments']);
        Route::delete('/expense-attachments/{expenseAttachment}', [ExpenseController::class, 'deleteAttachment']);
        Route::delete('/expenses/{expense}', [ExpenseController::class, 'destroy']);

        Route::get('/reports/sales-summary', [ReportController::class, 'salesSummary']);
        Route::get('/reports/sales-trend', [ReportController::class, 'salesTrend']);
        Route::get('/reports/sales-by-outlet', [ReportController::class, 'salesByOutlet']);
        Route::get('/reports/sales-by-cashier', [ReportController::class, 'salesByCashier']);
        Route::get('/reports/top-products', [ReportController::class, 'topProducts']);
        Route::get('/reports/payment-summary', [ReportController::class, 'paymentSummary']);
        Route::get('/reports/promo-usage', [ReportController::class, 'promoUsage']);
        Route::get('/reports/void-refund', [ReportController::class, 'voidRefund']);
        Route::get('/reports/low-stocks', [ReportController::class, 'lowStocks']);
        Route::get('/reports/purchase-materials', [ReportController::class, 'purchaseMaterials']);
        Route::get('/reports/expenses', [ReportController::class, 'expenses']);
        Route::get('/reports/shift-summary', [ReportController::class, 'shiftSummary']);
        Route::get('/reports/order-details', [ReportController::class, 'orderDetails']);
    });
});

```
</details>

<a id="file-bootstrapappphp"></a>
### bootstrap\app.php
- SHA: `2df0e8614957`  
- Ukuran: 1 KB  
- Namespace: ``
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->api(prepend: [
            \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
        ]);

        $middleware->alias([
            'verified' => \App\Http\Middleware\EnsureEmailIsVerified::class,
            'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
            'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

```
</details>

<a id="file-appprovidersappserviceproviderphp"></a>
### app\Providers\AppServiceProvider.php
- SHA: `b244d73f7df6`  
- Ukuran: 616 B  
- Namespace: `App\Providers`

**Class `AppServiceProvider` extends `ServiceProvider`**
<details><summary><strong>Lihat Kode Lengkap</strong></summary>

```php
<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ResetPassword::createUrlUsing(function (object $notifiable, string $token) {
            return config('app.frontend_url')."/password-reset/$token?email={$notifiable->getEmailForPasswordReset()}";
        });
    }
}

```
</details>
