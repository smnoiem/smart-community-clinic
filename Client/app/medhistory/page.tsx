"use client"

import { useState } from "react"

import { Button } from "@/components/ui/button"
import {
  Card,
  CardContent,
  CardDescription,
  CardHeader,
  CardTitle,
} from "@/components/ui/card"
import { DialogDemo } from "@/components/dialogbox"

type patients = {
  name: string
  decision: "Checkup Done" | "Admitted to Hospital"
}

function Page() {
  const [patientList, setPatientList] = useState<string[]>([
    "patient A",
    "patient B",
    "patient C",
  ])
  const [paitent, setPaitentType] = useState<patients[]>([])

  const removePatient = (name: string) => {
    const updatedPatientList = patientList.filter((patient) => patient !== name)
    setPatientList(updatedPatientList)
  }
  const addPatient = (
    name: string,
    decision: "Checkup Done" | "Admitted to Hospital"
  ) => {
    const newPatient: patients = {
      name,
      decision: decision,
    }
    setPaitentType([...paitent, newPatient])
  }

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
              {patientList.map((patient, index) => (
                <CardContent className="flex justify-between" key={index}>
                  <h2 className="scroll-m-20 pb-2 text-3xl font-semibold tracking-tight text-center">
                    {patient}
                  </h2>
                  <div className="flex space-x-2">
                    <DialogDemo />
                    <Button
                      onClick={() => {
                        addPatient(patient, "Checkup Done")
                        removePatient(patient)
                      }}
                    >
                      Checkup Done
                    </Button>
                    <Button
                      onClick={() => {
                        addPatient(patient, "Admitted to Hospital")
                        removePatient(patient)
                      }}
                    >
                      Emergency Hospital Admit
                    </Button>
                    <Button>Consult Doctor</Button>
                  </div>
                </CardContent>
              ))}
            </Card>
          </div>

          <Card className="w-full h-full">
            <CardHeader>
              <CardTitle>Medical History</CardTitle>
            </CardHeader>
            <CardContent className="flex flex-col">
              {paitent.map((paitent, index) => (
                <div className="flex justify-between">
                  <h2 className="scroll-m-20 pb-2 text-3xl font-semibold tracking-tight ">
                    {paitent.name}
                  </h2>
                  <Button variant="secondary" className="w-42">
                    {paitent.decision}
                  </Button>
                </div>
              ))}
            </CardContent>
          </Card>
        </CardContent>
      </Card>
    </div>
  )
}

export default Page