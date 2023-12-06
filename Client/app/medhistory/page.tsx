"use client"

import { Button } from "@/components/ui/button"
import {
  Card,
  CardContent,
  CardDescription,
  CardHeader,
  CardTitle,
} from "@/components/ui/card"
import { DialogDemo } from "@/components/dialogbox"

function Page() {
  return (
    <div className="container w-screen h-screen">
      <Card className="w-full h-full">
        <CardHeader>
          <CardTitle>Medical History</CardTitle>
          <CardDescription>
            Deploy your medical history to the world with a single click.
          </CardDescription>
        </CardHeader>
        <CardContent className="flex flex-col">
          <div className="pb-5">
            <Card className="w-full h-full">
              <CardHeader>
                <CardTitle>Medical History</CardTitle>
                <CardDescription>
                  Deploy your medical history to the world with a single click.
                </CardDescription>
              </CardHeader>
              <CardContent className="flex justify-between">
                <h2 className="scroll-m-20 pb-2 text-3xl font-semibold tracking-tight text-center">
                  Paiteint A
                </h2>
                <div className="flex space-x-2">
                  <DialogDemo />
                  <Button>Complete Checkup</Button>
                  <Button>Emergency Hospital Admit</Button>
                  <Button>Consult Doctor</Button>
                </div>
              </CardContent>
              <CardContent className="flex justify-between">
                <h2 className="scroll-m-20 pb-2 text-3xl font-semibold tracking-tight text-center">
                  Paiteint A
                </h2>
                <div className="flex space-x-2">
                  <DialogDemo />
                  <Button>Complete Checkup</Button>
                  <Button>Emergency Hospital Admit</Button>
                  <Button>Consult Doctor</Button>
                </div>
              </CardContent>
            </Card>
          </div>

          <Card className="w-full h-full">
            <CardHeader>
              <CardTitle>Medical History</CardTitle>
            </CardHeader>
            <CardContent className="flex flex-col">
              <div className="flex justify-between">
                <h2 className="scroll-m-20 pb-2 text-3xl font-semibold tracking-tight ">
                  Paitent A
                </h2>
                <Button variant="secondary" className="w-42">
                  Checkup Done
                </Button>
              </div>
              <div className="flex justify-between">
                <h2 className="scroll-m-20 pb-2 text-3xl font-semibold tracking-tight ">
                  Paitent B
                </h2>
                <Button variant="secondary" className="w-42">
                  Admitted to Hospital
                </Button>
              </div>
              <div className="flex justify-between">
                <h2 className="scroll-m-20 pb-2 text-3xl font-semibold tracking-tight ">
                  Paitent C
                </h2>
                <Button className="w-42" variant="secondary">
                  Checkup Done
                </Button>
              </div>
            </CardContent>
          </Card>
        </CardContent>
      </Card>
    </div>
  )
}

export default Page
